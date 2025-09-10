
      const output = document.getElementById('output');
      const history = document.getElementById('history');
      let expr = '';
      let lastResult = null;

      function sanitizeForEval(s){
        // Only allow digits, operators, parentheses, decimal point and spaces
        if (/[^0-9+\-*/(). %]/.test(s)) return null;
        return s.replace(/×/g,'*').replace(/÷/g,'/');
      }

      function updateDisplay(){
        output.textContent = expr === '' ? '0' : expr;
        history.textContent = lastResult !== null ? 'Resultado: ' + lastResult : '\u00A0';
      }

      function appendValue(v){
        // prevent multiple dots in the same number
        if (v === '.'){
          const parts = expr.split(/[^0-9.]/);
          const last = parts[parts.length-1];
          if (last.includes('.')) return;
        }
        expr += v;
        updateDisplay();
      }

      function clearAll(){ expr=''; lastResult=null; updateDisplay(); }
      function backspace(){ expr = expr.slice(0,-1); updateDisplay(); }

      function applyPercent(){
        // apply percent to last number: turn '123' -> '123/100'
        const m = expr.match(/(\d+(?:\.\d+)?)([^\d.]*)$/);
        if (!m) return;
        const whole = expr.slice(0, m.index);
        const num = m[1];
        const rest = m[2] || '';
        expr = whole + '(' + num + '/100)' + rest;
        updateDisplay();
      }

      function calculate(){
        const s = sanitizeForEval(expr);
        if (s === null || s.trim()==='') return;
        try{
          // eslint-disable-next-line no-new-func
          const fn = new Function('return ' + s);
          const value = fn();
          if (Number.isFinite(value)){
            lastResult = (Math.round((value + Number.EPSILON) * 1e12)/1e12).toString();
            expr = lastResult;
            updateDisplay();
          } else {
            output.textContent = 'Erro';
          }
        }catch(e){
          output.textContent = 'Erro';
        }
      }

      document.querySelectorAll('button.key').forEach(btn=>{
        btn.addEventListener('click', ()=>{
          const v = btn.getAttribute('data-value');
          const action = btn.getAttribute('data-action');
          if (v) appendValue(v);
          else if (action){
            if (action==='clear') clearAll();
            else if (action==='back') backspace();
            else if (action==='equals') calculate();
            else if (action==='percent') applyPercent();
          }
        });
      });

      // keyboard support
      window.addEventListener('keydown', (e)=>{
        if (e.key >= '0' && e.key <= '9') { appendValue(e.key); e.preventDefault(); }
        else if (e.key === '.') { appendValue('.'); e.preventDefault(); }
        else if (e.key === 'Enter' || e.key === '=') { calculate(); e.preventDefault(); }
        else if (e.key === 'Backspace') { backspace(); e.preventDefault(); }
        else if (e.key === 'Escape') { clearAll(); e.preventDefault(); }
        else if (['+','-','*','/','(',')'].includes(e.key)){ appendValue(e.key); e.preventDefault(); }
        else if (e.key === '%') { applyPercent(); e.preventDefault(); }
      });

    // init
    updateDisplay();