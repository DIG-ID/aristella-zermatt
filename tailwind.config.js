/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      primary: ['Univers LT Std', 'sans-serif'],
      primary_italic: ['Univers LT Std Obl', 'sans-serif'],
      primary_cn: ['Univers LT Std Cn', 'sans-serif'],
      primary_cn_italic: ['Univers LT Std CnObl', 'sans-serif'],
      primary_black: ['Univers LT Std Black', 'sans-serif'],
      primary_bold: ['Univers LT Std Bold', 'sans-serif'],
      primary_bold_cn: ['Univers LT Std Bold Cn', 'sans-serif'],
      primary_light: ['Univers LT Std Light', 'sans-serif'],
      primary_light_italic: ['Univers LT Std Light Obl', 'sans-serif'],
      primary_light_cn: ['Univers LT Light Cn', 'sans-serif'],
      primary_light_cn_italic: ['Univers LT Std Light CnObl', 'sans-serif'],
      primary_light_ultra: ['Univers LT Std Light Ultra', 'sans-serif'],
    },
    extend: {
      colors: {
        'black': '#45454c',
        'red': '#de3636',
        'beige': '#fff8ec',
        'blue': '#4983bb',
        'gold': '#c6b29a'
      },
    },
  },
  plugins: [
    //require('@tailwindcss/line-clamp'),
  ],
}
