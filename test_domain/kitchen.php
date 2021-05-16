<div class="frame">
  <div class="head">
    <div class="icon">

    </div>
    <div class="text">
     <h3>Kitchen</h3>
    </div>

  </div>

  <div class="main">
    <div class="img">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-brown" viewBox="0 0 512 512"><path d="M480.1 31.9c-55-55.1-164.9-34.5-227.8 28.5-49.3 49.3-55.1 110-28.8 160.4L9 413.2c-11.6 10.5-12.1 28.5-1 39.5L59.3 504c11 11 29.1 10.5 39.5-1.1l192.4-214.4c50.4 26.3 111.1 20.5 160.4-28.8 63-62.9 83.6-172.8 28.5-227.8z"/></svg>
      </span>
    </div>
    <div class="range">
     <div class="info first">
      <div class="text-first">
        <h3>410 kwh</h3>
        <h5>today</h5>
      </div>
      <div class="move">
        <input disabled type="range" name="" value="">
      </div>
     </div>
     <div class="info second">
      <div class="text-first">
        <h3>410 kwh</h3>
        <h5>Yesterday</h5>
      </div>
      <div class="move">
        <input disabled type="range" name="" value="">
      </div>
     </div>
     <div class="info third">
      <div class="text-first">
        <h3>410 kwh</h3>
        <h5>Last Week</h5>
      </div>
      <div class="move">
        <input disabled type="range" name="" value="">
      </div>
     </div>
     <button class="button" type="button" name="button">Turn Off All Devices</button>
    </div>

    <div class="other">

     <div class="section">

      <div class="icons">
        <span>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M96.06 454.35c.01 6.29 1.87 12.45 5.36 17.69l17.09 25.69a31.99 31.99 0 0 0 26.64 14.28h61.71a31.99 31.99 0 0 0 26.64-14.28l17.09-25.69a31.989 31.989 0 0 0 5.36-17.69l.04-38.35H96.01l.05 38.35zM0 176c0 44.37 16.45 84.85 43.56 115.78 16.52 18.85 42.36 58.23 52.21 91.45.04.26.07.52.11.78h160.24c.04-.26.07-.51.11-.78 9.85-33.22 35.69-72.6 52.21-91.45C335.55 260.85 352 220.37 352 176 352 78.61 272.91-.3 175.45 0 73.44.31 0 82.97 0 176zm176-80c-44.11 0-80 35.89-80 80 0 8.84-7.16 16-16 16s-16-7.16-16-16c0-61.76 50.24-112 112-112 8.84 0 16 7.16 16 16s-7.16 16-16 16z"/></svg>
        </span>
      </div>

      <div class="text">
        <h5>Main Light</h5>
      </div>

      <div class="butt">
        <button type="button" name="button">On</button>
      </div>

     </div>

     <div class="section">

      <div class="icons">
        <span>
           <svg xmlns="http://www.w3.org/2000/svg" class="bigger" viewBox="0 0 640 512"><path d="M592 0H48A48 48 0 0 0 0 48v320a48 48 0 0 0 48 48h240v32H112a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H352v-32h240a48 48 0 0 0 48-48V48a48 48 0 0 0-48-48zm-16 352H64V64h512z"/></svg>
        </span>
      </div>

      <div class="text">
        <h5>Television</h5>
      </div>

      <div class="butt">
        <button type="button" name="button">On</button>
      </div>

     </div>

     <div class="section">

      <div class="icons">
        <span>
        <svg xmlns="http://www.w3.org/2000/svg" class="big-fan" viewBox="0 0 512 512"><path d="M352.57 128c-28.09 0-54.09 4.52-77.06 12.86l12.41-123.11C289 7.31 279.81-1.18 269.33.13 189.63 10.13 128 77.64 128 159.43c0 28.09 4.52 54.09 12.86 77.06L17.75 224.08C7.31 223-1.18 232.19.13 242.67c10 79.7 77.51 141.33 159.3 141.33 28.09 0 54.09-4.52 77.06-12.86l-12.41 123.11c-1.05 10.43 8.11 18.93 18.59 17.62 79.7-10 141.33-77.51 141.33-159.3 0-28.09-4.52-54.09-12.86-77.06l123.11 12.41c10.44 1.05 18.93-8.11 17.62-18.59-10-79.7-77.51-141.33-159.3-141.33zM256 288a32 32 0 1 1 32-32 32 32 0 0 1-32 32z"/></svg>
        </span>
      </div>

      <div class="text">
        <h5>Main Light</h5>
      </div>

      <div class="butt">
        <button style="background:#fff;" type="button" name="button">Of</button>
      </div>

     </div>

    </div>

  </div>

</div>

<style media="screen">
.coloured{
  fill:green
}

  .img{
    width: 100px;
    margin-left: 150px
  }

  .range{
    display: flex;
    flex-wrap: wrap;
    border: 1px rgba(0, 0, 0, 0.034) solid;
    box-shadow: 2px 2px 30px 0px rgba(0, 0, 0, 0.1);
  }

  .range .info{
    height: 180px;
    font-size: 14px;
    text-align:center;

  }

  input[type='range'] {
      -webkit-appearance: none !important;
      background:grey;
      height:1px;
  }
  input[type='range']::-webkit-slider-thumb {
      -webkit-appearance: none !important;
      background:green;
      height:2px;
      width:80px;
      margin-left: -25px
  }
  button{
    width: 100%;
    height: 50px;
    background: brown;
    border: 1px rgba(0, 0, 0, 0.034) solid;
    padding: 2px;
    cursor: pointer;
  }

  .button:hover{
    transform: scale(1.1);
    transition: .4s
  }

  .section{
    margin-top: 5px;
    display: flex;
    border-top: 1px solid rgba(0,0,0,0.2);
    border-bottom: 1px solid rgba(0,0,0,0.2)
  }

  .icons{
    width: 40px;
    margin-top: 15px;
    margin-left: 5px
  }

  .section button{
    width: 100px;
    height: 40px;
    margin-top: 10px
  }

  .bigger{
    width: 40px;
  }

  .big-fan{
    width: 50px
  }
</style>
