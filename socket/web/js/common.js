
$(document).ready(function () {
    /*jshint esversion: 6 */
    let soket = new WebSocket("ws://localhost:8080");
    let result = $('.result')[0];
    let count = $('.count')[0];

    soket.onopen = function () {
        //result.innerHTML = "Connect correct";
    };

    soket.onclose = function (event) {
        if ( event.wasClean){
            result.innerHTML = "Connect incorrect";
        } else {
            result.innerHTML = "BY-BY";
        }

        result.innerHTML += event.code + event.reason;
    };

    soket.onmessage = function (event) {
        let message = JSON.parse(event.data);
        result.innerHTML += message.nickname + "<br>";
        count.innerHTML++;
    };

    soket.onerror = function (event) {
        result.innerHTML = "error" + event.data;
    };

    $('.form').on('submit', function () {
        let message = {
            nickname: $(this)[0][0].value
        };

        soket.send(JSON.stringify(message));
        return false;
    })
});

