<div class="row">
  <div class="">
    <img class="" src="">
    <p>Name: <span>{{ $user->name }}</span> </p>
    <p>Expertise: <span>{{ $user->experience }} </span></p>
    <p>Years of experience: <span>{{ $user->years }} </span></p>
    <div>
      <p>
        {{ $user->description }}
      </p>
    </div>
  </div>
  <div class="">
    <div>
      <p>Ratings</p>
      <hr>
      <p>Reviews: {{$user->reviews}}</p>
      <p>Score: {{$user->score}}</p>
    </div>
    <div>
      <a href="/users/{{ $user->id }}/contact"><button>Contact</button></a>
    </div>  
  </div>
</div>