var search = {
    key: '',
    current: 0
};
function submit () {
    var setLight = function () {
        search.key = searchText;
        var regExp = new RegExp(searchText, 'g');
        $('div').each(function () {
            var html = $(this).html();
            var newHtml = html.replace(regExp, '<span class="searching">'+searchText+'</span>');
            $(this).html(newHtml);
        });
    };
    var goLight = function () {
        var top = $('.searching').eq(search.current).offset().top - 250;
        $(window).scrollTop(top);
        search.current ++;
    };
    var searchText = $('input[name="search"]').val();
    if (searchText.indexOf('<') >= 0 || searchText.indexOf('>') >=0 || !searchText) return;
    if (searchText !== search.key) {
        setLight();
    }
    setTimeout(goLight, 200);
}
$('.searcha').keydown(function (e) {
    if (e.keyCode === 13) {
        e.preventDefault();
        submit();
    }
})