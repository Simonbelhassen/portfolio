<footer style="display:flex; flex-direction: row; justify-content: space-around; align-item: center;">
  <p>Author: Thomas LEBRET<br>
  <a href="mailto:th.lebret@protonmail.com">th.lebret@protonmail.com</a></p>
  <div>
    <a target="_blank" href="https://www.linkedin.com/in/thomas-lebret-9104801b9"><img style="width: 5vw;" src="public/img/linkedin.ico" alt="LinkedIn"></a>
    <a target="_blank" href="https://github.com/ThomasLEBRET"><img style="width: 5vw;" src="public/img/github.png" alt="GitHub"></a>
  </div>
</footer>

<script type="text/javascript">
  $('a[href^="#"]').click(function(){
      var id = $(this).attr("href");
      var offset = $(id).offset().top
      $('html, body').animate({scrollTop: offset}, 'slow');
      return false;
  });
</script>

</body>
</html>
