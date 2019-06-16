<style>
  * {
    font-family: impact;
  }

  .container {
    width: 1000px;
    margin: 130px auto;
  }

  h1 {
    text-align: center;
  }

  .buttons {
    width: fit-content;
    margin: auto;
  }

  .counts {
    width: 200px;
    height: 200px;
    background: #03a9f4;
    border-radius: 50%;
    margin: 20px auto;
    padding: 10px;
  }

  .counts h1 {
    color: white;
    font-size: 78px;
  }
</style>
<div class="container">
  <h1>My Counter</h1>

  <div class="counts">
    <h1>
      {{ $count }}
    </h1>
  </div>

  <div class="buttons">
    <a href="/increase/{{$count}}">
      <button>
        Increase
      </button>
    </a>
    <a href="/decrease/{{$count}}">
      <button>
        Decrease
      </button>
    </a>
  </div>
</div>