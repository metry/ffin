var API_URL = 'api.php';
var result = $('#result');

function print(data, div) {
    div.html('');
    $.each(data, function (index, value) {
        var html = '';
        $.each(value, function (key, val) {
            html += key + ': ' + val + "<br/>";
        });
        html += "<hr/>";
        div.append(html);
    });
};

$(document).ready(function() {
    $("#show").on('click', function() {
        $.ajax({
            url: API_URL,
            dataType: 'json',
        }).done(function(data) {
            print(data, result);
        });
    });
    $("#search").on('click', function() {
        $.ajax({
            url: API_URL,
            type: "POST",
            data: {
                'q' : $('input[name="q"]').val()
            },
            dataType: 'json',
        }).done(function(data) {
            if (data.error) {
                result.html(data.error);
            } else {
                print(data, result);
            }
        });
    });
});
