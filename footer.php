<footer>

</footer>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#logOut').on('click',function(){
      $.ajax({
        url:'logOut.php',
        type:'POST',
        // data:,
        dataType:'html',
        success: function(code){
          console.log(code);
        }
      })
      // return false;
    })
  })
</script>
</html>
