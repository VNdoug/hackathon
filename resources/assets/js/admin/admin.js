import $ from 'jquery';
import 'fullcalendar' ;
import 'bootstrap-datepicker';
import swal from 'sweetalert2';

$('#calendar').fullCalendar({
    defaultView: 'listWeek',
    locale: 'pt-br',
    timeFormat: 'HH:mm',

    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,listMonth,listWeek,listDay'
    },
    
    buttonText: {
      month: 'Mês',
      listMonth: 'Mês (lista)',
      listWeek: 'Semana',
      listDay: 'Dia'
    },

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

$('#calendar-medico').fullCalendar({
    defaultView: 'listDay',
    locale: 'pt-br',
    timeFormat: 'HH:mm',

    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,listMonth,listWeek,listDay'
    },
    
    buttonText: {
      month: 'Mês',
      listMonth: 'Mês (lista)',
      listWeek: 'Semana',
      listDay: 'Dia'
    },

    eventSources: [
      {
        url: '/ajax/medico/consultas',
        type: 'GET',

        error: function() {
          alert('Erro ao obter agendamentos!');
        },
        
      }
    ]
});

//Date picker
$('#datepicker').datepicker({
    autoclose: true,
    daysOfWeekDisabled: [0,6],
    format: "dd/mm/yyyy",
    language:"pt-BR",
    todayHighlight:true,
});


$('body').on('click', '.delete', function() {
    var btn = $(this);
    var form = btn.closest('form');
    btn.prop('disabled', true);

    swal({
        title: 'Tem certeza de que deseja excluir o registro?',
        text: "Essa ação não pode ser desfeita!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, excluir!'
    }).then((result) => {
        if (result.value) {
            form.submit();
        }

        btn.prop('disabled', false);
    })
})