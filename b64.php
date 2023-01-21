<input id="expiry" type="text" />
<script>
const inp = document.querySelector('#expiry')

inp.onkeydown = function() {

  const key = event.keyCode || event.charCode;
  
  if (key !== 8 && key !== 46 ) {
    if (inp.value.length == 2,5) {
        inp.value= (inp.value+'.');
    }
  }
  
  
  if (( key == 8 || key == 46) && inp.value.length === 4) {
    inp.value = inp.value.slice(0,3)
  }    
};
</script>