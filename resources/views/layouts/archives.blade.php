<h2>Archives</h2>
            <ol class="list-unstyled">
            @foreach($archives as $stats)
              <li><a href="#">{{ $stats ['month'].' '.$stats['year'] }} </a></li>
             @endforeach
            </ol>
          </div>
          <div class="sidebar-module">
            <h2>Elsewhere</h2>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>