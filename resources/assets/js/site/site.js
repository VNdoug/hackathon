import $ from 'jquery';
import 'bootstrap-datepicker';
/* jQuery Inputmask */
require('inputmask/dist/jquery.inputmask.bundle.js');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.fn.disable = function() {
    $(this).prop('disabled', true);
    return this;
};

$.fn.enable = function() {
    $(this).prop('disabled', false);
};

$("#select-tipo-medico").on('change', function () {
    var url =  $(this).data('url-ajax');
    var id = $(this).val();
    var selecMedicos =$('#select-medicos');
    selecMedicos.empty();

    $.ajax({
        url: url,
        type:'POST',
        dataType:'json',
        data:{ especializacao_id: id}
    }).done(function (data) {
        if (data.length != 0) {
            $.each(data, function (id, medico) {
                var newOption = new Option(medico, id, false, false);
                selecMedicos.append(newOption);
            });
        }else{
            var newOption = new Option('Médicos Não Encontrados...', 0, false, false);
            selecMedicos.append(newOption);
        }
        selecMedicos.enable();
    }).fail(function (data) {
        console.log(data);
    })
});

//Date picker
$('#datepicker').datepicker({
    autoclose: true,
    daysOfWeekDisabled: [0,6],
    format: "dd/mm/yyyy",
    language:"pt-BR",
    todayHighlight:true,
});

