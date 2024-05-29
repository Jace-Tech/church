const rows = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for(let row = 0; row < Math.ceil(rows.length / 3); row++) {
  const part = rows.slice((row * 3), ((row * 3) + 3))
  console.log("PART:", part)
  // ($MEMORIES, ($row * 3), 3); 
}