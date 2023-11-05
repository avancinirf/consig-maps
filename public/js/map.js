const mapConfig = (function() {

    //Init BaseMaps
    var baseLayers = {
        'Satélite': L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',
        {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }),
        'SemMapa': L.tileLayer('',{ maxZoom: 20 }),
    };


    const options = {
        'zoom': 16,
        'center': [-10.669359415, -64.939122761], // TODO - Alterar para automatizar a camada aos layers
        'zoomControl': false, // Whether the zoom control buttons is added to the map
        'zoomAnimation': false, // animations on zoom (performance)
        'maxZoom': 20, // The maximum zoom lvl
        'minZoom': 1, // minimum zoom lvl
        'boxZoom': true, // Whether the map can be zoomed to a rectangular area specified by dragging the mouse while pressing shift.
        'closePopupOnClick': true, // Set it to false if you don't want popups to close when user clicks the map.
        'layers': [baseLayers['Satélite']],
        'scrollWheelZoom': false
    };

    const mapLabels = {
        cod_imovel: 'Cod Imóvel',
        datahora: 'Data/Hora',
        id_foco: 'ID',
        num_area: 'Área',
        modulo_fiscal: 'Módulo Fiscal',
        data_tad: 'Data',
        numero_tad: 'Número',
        area_ha: 'Área',
        nm_mun: 'Município',
        sigla: 'UF',
        subzona: 'Subzona',
        ano: 'Ano',
        classe_uso_1: 'Classe 1',
        classe_uso_2: 'Classe 2'
    }

    return {
        options,
        baseLayers,
        mapLabels
    };

})();


// Inicialização do mapa
var map = L.map('mymap', mapConfig.options);
L.control.scale({ imperial: false }).addTo(map);
L.control.zoom({ position: 'bottomright' }).addTo(map);

// Camadas do mapa
var layergroups = {};
var overlayers = {};

var layerControl = new L.control.layers(mapConfig.baseLayers, overlayers, { sortLayers: true }).addTo(map);

//# sourceURL=map.js
