const fs = require('fs');
const path = require('path');

const prefix = 'https://www.figma.com/api/mcp/asset/d2ddc949-7488-4d09-9f0a-5e6628e27320';
const dir = 'C:\\xampp\\htdocs\\wood\\wood\\public\\images';
if (!fs.existsSync(dir)) {
    fs.mkdirSync(dir, { recursive: true });
}

const assets = {
  "foto_material_detail.png": `${prefix}/90105.png`,
  "foto_material_detail_1.png": `${prefix}/59624.png`,
  "foto_material_detail_2.png": `${prefix}/a5154.png`,
  "foto_material_detail_3.png": `${prefix}/f14a0.png`,
  "foto_material_detail_4.png": `${prefix}/84d91.png`,
  "foto_material_detail_5.png": `${prefix}/4468e.png`,
  "foto_material_detail_6.png": `${prefix}/52506.png`,
  "shopping_cart_white.svg": `${prefix}/afec2.svg`,
  "file_text.svg": `${prefix}/01209.svg`,
  "download.svg": `${prefix}/fad84.svg`
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
