/*global Qiniu */
/*global plupload */
/*global FileProgress */
/*global hljs */


$(function() {
    var uploader = Qiniu.uploader({
        runtimes: 'html5,flash,html4',
        browse_button: 'pickfiles',
        container: 'container',
        drop_element: 'container',
        max_file_size: '100mb',
        flash_swf_url: 'js/plupload/Moxie.swf',
        dragdrop: true,
        chunk_size: '4mb',
        uptoken_url: 'http://web.ldustu.com/index.php?c=index&m=uptoken',
        domain: 'http://ldsnmysqlbackup.qiniudn.com',
        auto_start: true,
        init: {
            'FilesAdded': function(up, files) {
                console.log(up);
                plupload.each(files, function(file) {
                   console.log(file);
                   $('.progress').show();
                });
            },
            'BeforeUpload': function(up, file) {            },
            'UploadProgress': function(up, file) {
                $('.progress-bar').css("width",file.percent+"%");
                
            },
            'UploadComplete': function() {
                $('.progress').hide();
                $('.alert').show();
                console.log('success');
            },
            'FileUploaded': function(up, file, info) {
                var a = "<a href='http://baiketest.qiniudn.com/"+file.name+ "'>"+file.name+"</a>";
                $('#upfile').val(a);
                
            },
            'Error': function(up, err, errTip) {
            }
        }
    });
    $('#container').on(
        'dragenter',
        function(e) {
            e.preventDefault();
            $('#container').addClass('draging');
            e.stopPropagation();
        }
    ).on('drop', function(e) {
        e.preventDefault();
        $('#container').removeClass('draging');
        e.stopPropagation();
    }).on('dragleave', function(e) {
        e.preventDefault();
        $('#container').removeClass('draging');
        e.stopPropagation();
    }).on('dragover', function(e) {
        e.preventDefault();
        $('#container').addClass('draging');
        e.stopPropagation();
    });



    $('#show_code').on('click', function() {
        $('#myModal-code').modal();
        $('pre code').each(function(i, e) {
            hljs.highlightBlock(e);
        });
    });

    $('body').on('click', 'table button.btn', function() {
        $(this).parents('tr').next().toggle();
    });


    var getRotate = function(url) {
        if (!url) {
            return 0;
        }
        var arr = url.split('/');
        for (var i = 0, len = arr.length; i < len; i++) {
            if (arr[i] === 'rotate') {
                return parseInt(arr[i + 1], 10);
            }
        }
        return 0;
    };
});
