$(function() {
  $('#submit').click(FormUtil.sendToServer);
  $('#name').val('');
  FormUtil.resetForm();
  FormUtil.openForm();
  FormUtil.closeForm();
  
  console.log(posts);
});

var FormUtil = {};

FormUtil.sendToServer = function(event) {
  event.preventDefault();
  
  if(Validation.isFilledOut())
	{
    Validation.colorBadInputs();
    
    $.ajax({
      type: 'POST',
      url: 'xmlwriter.php',
      data: $('#post-form').serialize(),
      success: FormUtil.success
    });
	}
	else
	{    
    Validation.colorBadInputs();
	}
	return false;
};

FormUtil.resetForm = function() {
  $('#name').val('');
  $('#message').val('');
};

FormUtil.success = function() {
  alert('thanks');
  $('#name').val('');
  $('#message').val('');
  $('#overlay').hide();
  $('#alert-contain').hide();
  location.reload();
};

FormUtil.openForm = function() {
  $('#post-something').click(function(){
    $('#overlay').show();
    $('#alert-contain').show();
  });
};

FormUtil.closeForm = function() {
  $('#close-form').click(function(){
    FormUtil.resetForm();
    Validation.colorBadInputs();
    $('#overlay').hide();
    $('#alert-contain').hide();
  });
};


