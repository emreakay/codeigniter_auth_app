  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      Created by<a class="label" style="font-size:14px;" href="https://github.com/AlexBeznos">AlexBeznos</a>
    </div>
  </div>
  <?=jquery('1.11.2')?>
  <?=js('bootstrap.min.js')?>
  <?=js('docs.min.js')?>
  <script>
    $(document).ready(function() {
      $('.progress').css('top', $(document).height());
    });
  </script>
  </body>
</html>
