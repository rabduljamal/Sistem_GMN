 var host = window.location.hostname;
$("body").on("click",'a.open',function(){
	var page=$(this).attr('href');
	$("body").off( "click", "a");
	$('#content').html(
		'<br><br><br><br><br><br><br><br><br>'+
		'<div class="col s12 m12 center">'+
	  '                  <div class="preloader-wrapper big active">'+
	  '                    <div class="spinner-layer spinner-blue-only">'+
	  '                      <div class="circle-clipper left">'+
	  '                        <div class="circle"></div>'+
	  '                      </div>'+
	  '                      <div class="gap-patch">'+
	  '                        <div class="circle"></div>'+
	  '                      </div>'+
	  '                      <div class="circle-clipper right">'+
	  '                        <div class="circle"></div>'+
	  '                      </div>'+
	  '                    </div>'+
	  '                 </div>'+
	  '                </div>'+
		'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>'
	);
	setTimeout(function(){
		$('#content').html('');
		$('#content').load(page);
	}, 1000);
	$("body").on( "click", "a");;
	$('body').scrollTop(0);
	return false;
});

$('#content').ready(function(){

});


/* ------function------- */

function readURL(input,el) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function (e) {
	        	$(el).attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	}
}

function printDiv(tag){

  var divToPrint=document.getElementById(tag);

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write(
  '<html>'+
	'<head>'+
	'</head>'+
	'<body onload="window.print()">'+
  '<link href="http://'+host+'/asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">'+divToPrint.innerHTML+
  '<script src="http://'+host+'/asset/plugins/jquery/jquery.min.js"></script>'+
  '<script src="http://'+host+'/asset/plugins/bootstrap/js/bootstrap.js"></script>'+
  '</body></html>');
  newWin.document.close();
  setTimeout(function(){newWin.close();},100);

}

function realtime_g(){
	$.ajax({
        type:'post',
        dataType: "json",
        url:'http://'+host+'/dashboard/get_penjualan',
        success: function(data) {
			var options = {
					series: {
						shadowSize: 0,
						color: 'rgb(0, 188, 212)'
					},
					grid: {
						borderColor: '#f3f3f3',
						borderWidth: 1,
						tickColor: '#f3f3f3',
						hoverable: true
					},
					lines: {
						show: true,
						fill: true,
						fillColor: { colors: [{ opacity: 0.7 }, { opacity: 0.1}] }
					},
					xaxis: {
					  mode: "categories",
					  tickLength: 0
					},
					yaxis:{
						tickFormatter: function(val, axis) {
							return val.toLocaleString();
						},
					},
					colors: ["#37b7f3"],
					tooltip: {
					  show: true,
					  content: "%y",
					  shifts: {
						x: -60,
						y: 25
					  }
					}
				};
            $.plot($("#placeholder"),  data, options);
        }
    });
}
