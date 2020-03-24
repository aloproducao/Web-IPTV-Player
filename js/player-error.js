var ErrorPlugin = Clappr.ContainerPlugin.extend({
  name: 'error_plugin',
  background: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAoAAAAFoBAMAAAA1HFdiAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAG1BMVEX5+fn//wAA//8A/wD/AP//AAAAAP8XFxf///8H5gWfAAAAAWJLR0QIht6VegAAAAd0SU1FB98IBRIsAXmGk48AAAI5SURBVHja7dJBDYBADADBs4AFLGABC1iohbOPhv1BMvu+NLlp10odqTN1pe7Uk5pQ8wMIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECDA/wKWxzM71T7ZZrfltNnppgACBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAL8B+ALjSfYzPnmdzgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNS0wOC0wNVQxODo0NDowMSswMTowMCL95a4AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTUtMDgtMDVUMTg6NDQ6MDErMDE6MDBToF0SAAAAAElFTkSuQmCC',
  bindEvents: function() { this.listenTo(this.container, Clappr.Events.CONTAINER_ERROR, this.onError) },
  hide: function() { this._err && this._err.remove() },
  show: function() {
    var $ = Clappr.$
    this.hide();
    var txt = (this.options.errorPlugin && this.options.errorPlugin.text) ? this.options.errorPlugin.text : 'IPTV Channel Encountered Error';
    this._err = $('<div>')
      .css({
        'position': 'absolute',
        'z-index': '999',
        'width': '100%',
        'height': '100%',
        'background-image': 'url(' + this.background + ')',
        'background-size': 'cover',
        'background-repeat': 'no-repeat',
        'padding-top': '15%',
        'text-align': 'center',
        'font-weight': 'bold',
        'text-shadow': '1px 1px #fff',
      })
      .append($('<h2>')
        .text(txt)
        .css({
          'font-size': '200%',
        }))
      .append($('<p>').html('Retry this channel in few minutes or report to your IPTV provider.')
        .css({
          'font-size': '120%',
          'margin': '15px',
        }));
    this.container && this.container.$el.prepend(this._err);
  },
  onError: function(e) {
    if (!this.container) return;
    this.show();
    this.container.getPlugin('click_to_pause').disable();
  }
});