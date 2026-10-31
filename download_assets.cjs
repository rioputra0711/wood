const fs = require('fs');
const path = require('path');

const prefix = 'https://www.figma.com/api/mcp/asset/d8d8e533-d470-4e8f-9e93-cca6238944af';
const dir = 'C:\\xampp\\htdocs\\wood\\wood\\public\\images';
if (!fs.existsSync(dir)) {
    fs.mkdirSync(dir, { recursive: true });
}

const assets = {
  "foto_material.png": `${prefix}/edfb6.png`,
  "foto_material_1.png": `${prefix}/5e455.png`,
  "foto_material_2.png": `${prefix}/a6500.png`,
  "foto_material_3.png": `${prefix}/9ce54.png`,
  "foto_material_4.png": `${prefix}/d8a2a.png`,
  "foto_material_5.png": `${prefix}/2df0a.png`,
  "layers_3.svg": `${prefix}/a3cae.svg`,
  "search.svg": `${prefix}/e38f2.svg`,
  "shopping_cart.svg": `${prefix}/7d0f8.svg`,
  "arrow_up_right.svg": `${prefix}/f59ae.svg`,
  "search_small.svg": `${prefix}/38318.svg`,
  "chevron_down.svg": `${prefix}/8b2d1.svg`,
  "info.svg": `${prefix}/91694.svg`
};

async function download() {
  for (const [filename, url] of Object.entries(assets)) {
    const res = await fetch(url);
    const arrayBuffer = await res.arrayBuffer();
    fs.writeFileSync(path.join(dir, filename), Buffer.from(arrayBuffer));
    console.log(`Downloaded ${filename}`);
  }
}

download().catch(console.error);
