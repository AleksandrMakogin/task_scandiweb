



$('body').on('input', '.input-number', function(){
    this.value = this.value.replace(/[^0-9]/g, '');
});

$('body').on('input', '.input-en', function(){
    this.value = this.value.replace(/[^a-z\s]/gi, '');
});


