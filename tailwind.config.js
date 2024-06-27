/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.html',              
    './matricula.html',          
    './registro.html',           
    './sistema/**/*.html',       
    './pages/**/*.html',         
    './php/**/*.php',            
    './sistema/**/*.php',  
  ],
  theme: {
    extend: {
      colors:{
        'mylile':'#CE9EFF',
        'mypink':'#FD91FF',

      }
    },
  },
  plugins: [],
}

