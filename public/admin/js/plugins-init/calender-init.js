


(function($) {
    "use strict"

    var events = [
        {start: '2019/05/3', end: '2019/5/07', summary: "Event One", mask: true},
        {start: '2019/05/15', end: '2019/05/15', summary: "Event Two", mask: true}
    ];
    
    $('#calendar').calendar({
        'events': events,
        color: '#fff'
    });

})(jQuery);