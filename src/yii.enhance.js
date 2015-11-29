(function(yii) {
	require('sweetalert/dist/sweetalert.css');
	var swal = require('sweetalert');
	function _confirm (message, ok, cancel) {
		var opts = {
			title: message,
			// text: message,
			type: 'warning',
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true
		};
		opts = $.extend(opts, yii.sweetSubmitOptions || {});
		console.log(opts)
	  swal(opts, function(confirmed) {
	    if (confirmed) {
	      !ok || ok();
	    } else {
	      !cancel || cancel();
	    }
	  });
	}
	yii.confirm = _confirm;
	yii.swal = swal;

})(yii);