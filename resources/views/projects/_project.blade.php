<div class="row">
  <div class="">
    <h3>Company</h3>
    <img src="">
    <h3>Type</h3>
    <img src="">
    <h3>Industry</h3>
    <img src="">
  </div>
  <div class="">
    <h3>{{ $project->title }}</h3>
    <p>{{ $project->description }}</p>
    <ul>
      <li>Time: {{ $project->time }}</li>
      <li>Price: {{ $project->price }}</li>
      <li>Start: {{ $project->start }}</li>
      <li>Method: {{ $project->method }}</li>
    </ul>
  </div>
</div>