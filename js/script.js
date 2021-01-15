$(document).ready(function () {

    $('select').change(function () {
        getPrice($("#price").val().replace(',', '.'))
    })

    $('#price').keyup(function () {
        getPrice(this.value.replace(',', '.'))
    })

    function getPrice(price) {
        if (price == "") {
            price = 0
        }
        currency = $("#currency").val()
        $.post('controller.php', {
            currency: currency,
            price: price,
        }, function (data) {
            if (data != "") {
                var res = data.split("|")
                $('#high').text(res[0])
                $('#low').text(res[1])
                $('#varBid').text(res[2])
                $('#pctChange').text(res[3])
                $('.bid').text(res[4])
                $('#ask').text(res[5])
                $('#create_date').text(res[6])
            }
        })
    }

    $('.money').mask('0000000000,00', { reverse: true });
})