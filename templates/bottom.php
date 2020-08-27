
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

     <script   src="https://unpkg.com/@glidejs/glide"></script>
     <script  src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script >
      // const config = {
      //   type: "carousel",
      //   startAt: 0,
      //   perView: 1,
      // };
      new Glide(".glide", {
        type: "carousel",
        // startAt: 0,
        perView: 5,
        gap:10,
        animationDuration:1000,
        breakpoints: {
          800: {
            perView: 2,
          },
        },
        // autoplay:1000
      }).mount();
    </script>
    <script type="text/javascript" >
      let mainHeadTitle = document.getElementsByClassName('main-head-title')[0]
      var typewriter = new Typewriter(mainHeadTitle, {
          strings: ['Hungry?', 'Unexpected guests?', 'Cooking gone wrong?', "Movie marathon?","Game night?", "Late night at office?"],
          cursor: '|',
          delay: 'natural', 
          loop: true, 
          autoStart: true,
          devMode: false,
          wrapperClassName: 'Typewriter__wrapper',
          cursorClassName: 'Typewriter__cursor',
      });
    </script>
</body>
</html>

