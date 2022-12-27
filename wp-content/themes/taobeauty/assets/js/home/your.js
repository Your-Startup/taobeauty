export default function yourAnimationInit() {

  const canvas  = document.querySelector('#your-canvas'),
        section = document.querySelector('section.your');
  
  var animation_farame = 70,
      section_top = section.offsetTop,
      is_show = false;

  var img = new Image();
  img.src = canvas.dataset.src;
  
  let requestID = null;
  
  function waves() {
  
    cancelAnimationFrame(requestID);
  
    var ctx = canvas.getContext("2d"),
        w = canvas.width = img.width,
        h = canvas.height = img.height;
  
    ctx.drawImage(img, 0, 0, w, h);
  
    var o1 = new Osc(0.06), o2 = new Osc(0.06), o3 = new Osc(0.06),  // osc. for vert
        o4 = new Osc(0.03), o5 = new Osc(0.03), o6 = new Osc(0.03), // osc. for hori
        
        // source grid lines
        x0 = 0, x1 = w * 0.25, x2 = w * 0.5, x3 = w * 0.75, x4 = w,
        y0 = 0, y1 = h * 0.25, y2 = h * 0.5, y3 = h * 0.75, y4 = h,
        
        // cache source widths/heights
        sw0 = x1, sw1 = x2 - x1, sw2 = x3 - x2, sw3 = x4 - x3,
        sh0 = y1, sh1 = y2 - y1, sh2 = y3 - y2, sh3 = y4 - y3,
        
        vcanvas = document.createElement("canvas"),  // off-screen canvas for 2. pass
        vctx = vcanvas.getContext("2d");
  
    vcanvas.width = w; vcanvas.height = h;           // set to same size as main canvas
  
    (function loop() {
      ctx.clearRect(0, 0, w, h);
      
      for (var y = 0; y < h; y++) {
  
        // segment positions
        var lx1 = x1 + o1.current(y * 0.2) * 2.5,
            lx2 = x2 + o2.current(y * 0.2) * 2,
            lx3 = x3 + o3.current(y * 0.2) * 1.5,
  
            // segment widths
            w0 = lx1,
            w1 = lx2 - lx1,
            w2 = lx3 - lx2,
            w3 =  x4 - lx3;
  
        // draw image lines
        ctx.drawImage(img, x0, y, sw0, 1, 0        , y, w0      , 1);
        ctx.drawImage(img, x1, y, sw1, 1, lx1 - 0.5, y, w1 + 0.5, 1);
        ctx.drawImage(img, x2, y, sw2, 1, lx2 - 0.5, y, w2 + 0.5, 1);
        ctx.drawImage(img, x3, y, sw3, 1, lx3 - 0.5, y, w3 + 0.5, 1);
      }
  
      // pass 1 done, copy to off-screen canvas:
      vctx.clearRect(0, 0, w, h);    // clear off-screen canvas (only if alpha)
      vctx.drawImage(canvas, 0, 0, w, h);
      ctx.clearRect(0, 0, w, h);     // clear main (onlyif alpha)
  
      for (var x = 0; x < w; x++) {
        var ly1 = y1 + o4.current(x * 0.32),
            ly2 = y2 + o5.current(x * 0.3) * 2,
            ly3 = y3 + o6.current(x * 0.4) * 1.5;
  
        ctx.drawImage(vcanvas, x, y0, 1, sh0, x, 0        , 1, ly1);
        ctx.drawImage(vcanvas, x, y1, 1, sh1, x, ly1 - 0.5, 1, ly2 - ly1 + 0.5);
        ctx.drawImage(vcanvas, x, y2, 1, sh2, x, ly2 - 0.5, 1, ly3 - ly2 + 0.5);
        ctx.drawImage(vcanvas, x, y3, 1, sh3, x, ly3 - 0.5, 1,  y4 - ly3 + 0.5);
      }
  
      requestID = requestAnimationFrame(loop);
    })();
  }
  
  function Osc(speed) {
    var frame = 0;
    this.current = function(x) {
      frame += 0.0001 * animation_farame * speed;
      return Math.sin(frame + x * speed * 4);
    };
  }
  
  window.addEventListener('resize', () => {
    section_top = section.offsetTop;
  })

  document.addEventListener('scroll', () => {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollTop = scrollTop + window.innerHeight * 0.75;

    if (scrollTop >= section_top && !is_show) {
      waves();
      is_show = true;
      section.classList.add('active');
      setTimeout(() => {
          const id = setInterval(() => {
              if (animation_farame == 0) {
                  clearInterval(id);
                  cancelAnimationFrame(requestID);
              } 
              animation_farame--;
          }, 20);
      }, 1000);
    }
  });
}