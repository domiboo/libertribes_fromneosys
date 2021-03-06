var LibertribesWorldBundle = LibertribesWorldBundle || {};

/**
 *
 */
LibertribesWorldBundle.MapLayer = (function () {
    
    var MapLayer = function () {};
    
    /**
     * 
     */
    MapLayer.prototype.handleUpdate = function (element, panel, t, r, b, l) {
        var sw = panel.getSectionSize().getWidth(),
        sh = panel.getSectionSize().getHeight();
        var lh = (t - b),
        lw = (r - l),
        i, li,
        j, lj,
        ll = (l / sw),
        lb = (b / sh),
        user_select = ' -o-user-select: none; -webkit-user-select: none; -moz-user-select: -moz-none; -khtml-user-select: none; -ms-user-select: none; user-select: none; '
        ;
        for (i = 0, li = lh / sh; i < li; i++) {
            for (j = 0, lj = lw / sw; j < lj; j++) {
                var image = panel.getSectionPath(ll + j, lb + i);
                if (image) {
                    var section = document.createElement('IMG');
                    section.setAttribute('src', image);
                    section.setAttribute('width', sw);
                    section.setAttribute('height', sh);
                    section.setAttribute('unselectable', 'on');
                    section.setAttribute('style', 'left:'+(j * sw)+'px; bottom:'+(i * sh)+'px; '+user_select+' position:absolute; padding: 0px; margin: 0px; border: 0px;');
                    element.appendChild(section);
                }
            }
        }

        var protector = document.createElement('DIV');
        protector.setAttribute('unselectable', 'on');
        protector.setAttribute('style', 'position: absolute; bottom:0px; left:0px; '+user_select+' width: '+lw+'px; height: '+lh+'px;');
        element.appendChild(protector);

    };
    
    return MapLayer;
})();
