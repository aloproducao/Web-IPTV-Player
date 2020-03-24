(function(w) {
    var Video = function(src, skip, timeout, link) {
        this.text = {
            wait: 'Wait % seconds...',
            skip: 'Skip >'
        };
        this.onEnd = false;
        this.wrapper = this._initWrapper();
        this.video = this._initVideo(src, link);
        this.wrapper.appendChild(this.video);
        if (skip) {
            this.skipButton = this._initSkipButton(timeout);
            this.wrapper.appendChild(this.skipButton);
        }
    };

    Video.prototype._initWrapper = function() {
        var el = document.createElement('div');
        el.style.display = 'block';
        el.style.position = 'absolute';
        el.style.width = '100%';
        el.style.height = '100%';
        el.style.top = '0px';
        el.style.left = '0px';
        el.style.zIndex = 10000;
        el.addEventListener('click', function(e) {
            e.stopPropagation();
            return false;
        }.bind(this));
        return el;
    };

    Video.prototype._initVideo = function(src, link) {
        var el = document.createElement('video');
        el.style.display = 'block';
        el.style.position = 'absolute';
        el.style.width = '100%';
        el.style.height = '100%';
        el.style.cursor = 'pointer';
        el.controls = false;
        el.src = src;
        el.classList.add('vidads');
        el.addEventListener('click', function(e) {
            e.stopPropagation();
            window.open(link, '_blank');
            return false;
        }.bind(this));
        el.addEventListener('ended', this._end.bind(this));
        return el;
    };

    Video.prototype._initSkipButton = function (timeout) {
        var el = document.createElement('button');
        el.style.display = 'none';
        el.style.position = 'absolute';
        el.style.bottom = '45px';
        el.style.right = '0px';
        el.style.padding = '15px';
        el.style.backgroundColor = '#000';
        el.style.border = 'solid thin #eee';
        el.style.fontSize = '18px';
        el.style.color = '#FFF';
        el.style.right = '-1px';
        el.disabled = true;
        el.addEventListener('click', this._end.bind(this));
        this._skipButtonCountdown(el, timeout);
        return el;
    };

    Video.prototype._skipButtonCountdown = function(el, timeout) {
        var countDown = setInterval((function() {
            el.style.display = 'block';
            if (timeout > 0) {
                el.innerHTML = this.text.wait.replace('%', timeout);
                timeout--;
            } else {
                el.innerHTML = this.text.skip;
                el.disabled = false;
                el.addEventListener('click', function(e) {
                    window.open = function (url, windowName, windowFeatures) {};
                    return false;
                }.bind(this));
                clearInterval(countDown);
            }
        }).bind(this), 1000);
    };

    Video.prototype._end = function(evt) {
        if (evt)
            evt.preventDefault();
        this.wrapper.parentNode.removeChild(this.wrapper);
        if (typeof(this.onEnd) === "function") {
            this.onEnd();
        }
    };

    Video.prototype.play = function() {
        this.video.play();
    };
    
    var ClapprAds = Clappr.UICorePlugin.extend({
        _isAdPlaying: false,
        _hasPreRollPlayed: false,
        _preRoll: false,
        _videoText: {},
        _rand: function (min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        },

        name: 'clappr_ads',

        initialize: function() {
            if ('ads' in this._options) {
                if ('preRoll' in this._options.ads) {
                    if ('src' in this._options.ads.preRoll) {
                        this._preRoll = this._options.ads.preRoll;
                    } else {
                        throw "No source";
                    }
                }
                if ('text' in this._options.ads) {
                    var text = this._options.ads.text;
                    if ('wait' in text) {
                        this._videoText.wait = text.wait;
                    }
                    if ('skip' in text) {
                        this._videoText.skip = text.skip;
                    }
                }
            }
            this.bindEvents();
        },

        bindEvents: function() {
            this.listenTo(this.core, Clappr.Events.CORE_READY, (function() {
                var container = this.core.getCurrentContainer();
                container.listenTo(container.playback, Clappr.Events.PLAYBACK_PLAY, this._onPlaybackPlay.bind(this, container));
            }).bind(this));
        },

        _onPlaybackPlay: function(container) {
            if (this._isAdPlaying) {
            } else {
                if (!this._preRoll || this._hasPreRollPlayed)
                    return;

                this.playPreRoll(container);
            }
        },

        _onPlaybackEnd: function() {
            this._isAdPlaying = false;
            this._hasPreRollPlayed = false;
        },

        playPreRoll: function(container) {
            if (this._isAdPlaying)
                return;
            var src;
            src = this._preRoll.src;
            container.playback.mute();
            video = new Video(src, this._preRoll.skip, this._preRoll.timeout, this._preRoll.link);
            container.$el.append(video.wrapper);
            video.onEnd = this._onPreRollEnd.bind(this, video, container.playback);
            if ('wait' in this._videoText) {
                video.text.wait = this._videoText.wait;
            }
            if ('skip' in this._videoText) {
                video.text.skip = this._videoText.skip;
            }
            video.play();
            this._hasPreRollPlayed = true;
        },

        _onPreRollEnd: function(video, playback) {
            playback.unmute();
            this._isAdPlaying = false;
            setTimeout(function() { playback.play(); }, 100);
        },
    });
    w.ClapprAds = ClapprAds;
})(window);
