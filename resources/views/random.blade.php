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
  <h1>Random Number</h1>

  <form method="post" action="/random">
    <div class="buttons">
      @csrf
      <input type="number" value="0" placeholder="From" name="from">
      <input type="number" value="500" placeholder="To" name="to">
    </div>

    <div class="counts">
      <h1>
        {{ $randomNumber }}
      </h1>
    </div>

    <div class="buttons">
      <button>
        Random
      </button>
    </div>
  </form>






</div>