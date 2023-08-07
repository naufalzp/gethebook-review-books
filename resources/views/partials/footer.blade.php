<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
      <a href="#" id="scrollToTopButton"><i class="fa fa-caret-up"></i></a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer__logo">
            <a href="{{ route('index.show') }}"><img src="img/logo4png.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer__nav">
            <ul>
              <li class="{{ ($active) === 'home' ? 'active' : '' }}">
                <a href="{{ route('index.show') }}">Homepage</a>
            </li>
            
            <li><a href="#">Community</a></li>
            <li class="{{ ($active) === 'mybooks' ? 'active' : '' }}">
                <a href="{{ route('mybooks.index') }}">My Books</a>
            </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <p>
            
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | Gethebook
            
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->