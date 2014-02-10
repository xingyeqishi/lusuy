define(function(require, exports, modules) {
	var $ = require('jquery');
	console.log($);
	exports.init = function() {
		var ndForm = $(".create-form"),
			_this = this;
		
		ndForm.on('submit', function(e) {
			e.preventDefault();
			$.ajax({
				url: ndForm.attr('action'),
				type: "POST",
				data: ndForm.serialize()
			}).done(function(data) {
				if (data.status == 200) {
					alert('新建成功');
				}
			});
		});
	}
});