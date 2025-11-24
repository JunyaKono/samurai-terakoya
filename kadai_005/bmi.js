// 体重(kg)と身長(m)を変数に代入
let weight;   // 体重(kg)
let height;  // 身長(m)

weight = '68';
height = '1.7';
// BMIを計算する式: 体重 ÷ (身長 × 身長)
let bmi = weight / (height * height);

console.log("BMI: " + bmi);
