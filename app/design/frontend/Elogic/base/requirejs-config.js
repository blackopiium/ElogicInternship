var config = {
    map: {
        '*': {
            'slick': 'js/slick',
            'carousel': 'js/custom-slider',
            'tabSliderFix': 'js/tab-slider-fix',
            'selectize': 'js/selectize',
            'sifter': 'js/sifter',
            'microplugin': 'js/microplugin',
            'dropdownSelectize': 'js/dropdown-selectize'
        }
    },
    shim: {
        'slick' : {
            deps: ['jquery']
        },
        'selectize' : {
            deps: ['jquery','sifter','microplugin']
        }
    }
};
