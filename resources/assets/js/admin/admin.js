// import $ from 'jquery';

window.jQuery = window.$ = require('jquery') 

import 'fullcalendar' ;

$('#calendar').fullCalendar({
    defaultView: 'listWeek',
    locale: 'pt-br',
    timeFormat: 'HH:mm',

    eventSources: [
        {
          url: '/ajax/atendente/agendamentos',
          type: 'GET',

          error: function() {
            alert('Erro ao obter agendamentos!');
          },
          
        }
      ]
});