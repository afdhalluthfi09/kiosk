// const settings = {
//     "async": true,
//     "crossDomain": true,
//     "url": "http://diskopukm.jogjaprov.go.id/berita.php",
//     "method": "GET",
//     "headers": {
//       "access-control-allow-origin": "*",
//       "access-control-allow-methods": "get",
//       "content-type": "application/json"
//     }
//   };
$(function() {

    // $.ajax({
    //     url:"http://diskopukm.jogjaprov.go.id/berita.php?",
    //     method:"get",
    //     headers:{
    //         Origin: '*'  
    //     },
    //     dataType:'json',
    //     success:function(data){
    //         console.log(data.berita[2]);
            
    //         $('footer p#run-a').html(data.berita[0].judul +" | "+ data.berita[1].judul +" | "+ data.berita[2].judul   );
                                      
            
    //     }
    // })

    // $.ajax(settings).done(function (response) {
    //     console.log(response);
    //   });

    // $.get("",function(data){
    //     alert("succes");
    //     console.log(data);
    // })
    //     .done(function(){
    //         alert ("sukses");
    //     })
    //     .fail(function(){
    //         alert ("error");
    //     })



    $('.edit').on('click',function(){

        const id =$(this).data('id');

        $.ajax({
            url:"http://kiosk.vanjogja.com/public/Admin/edit",
            data:{id :id},
            method:'post',
            dataType:'json',
            success:function(data){
                $('#tgl_agenda').val(data.tgl_agenda);
                $('#jam').val(data.jam);
                $('#kegiatan').val(data.kegiatan);
                $('#tempat').val(data.tempat);
                $('#statuss').val(data.statuss)
                $('#id').val(data.id);
            }
        })
    });

    

    // $('.table').scroll(function(){
    //     console.log($('.table').scrollTop());
    //     if($('.table').scrollTop()== 224){
    //         console.log('hello');
    //     }
    // })

    $('.uploadG').on('click',function(){
        
        const id = $(this).data('id');
        $.ajax({
            url:"http://kiosk.vanjogja.com/public/Admin/updateG",
            data:{id :id},
            method:'post',
            dataType:'json',
            success:function(data){
                console.log(data)
                $('#tglPost').val(data.tglPost);
                $('#gambar_nama').attr('src','http://kiosk.vanjogja.com/public/gbr/'+ data.nama_gambar);
                // $('#nama_gambar').val(data.nama_gambar);
                $('#n_acara').val(data.n_acara);
                $('#id').val(data.id);
            }
        })
    })





} )