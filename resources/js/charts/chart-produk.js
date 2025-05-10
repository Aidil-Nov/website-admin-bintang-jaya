import Chart from "chart.js/auto";
import { space } from "postcss/lib/list";

// Total penjualan per kategori
const dataDonut = {
  labels: [
    "Living room",
    "Kids",
    "Office",
    "Bedroom",
    "Kitchen",
    "Bathroom",
    "Dining room",
    "Decor",
    "Lighting",
    "Outdoor"
  ],
  datasets: [{
    label: "Sales by Category",
    data: [25, 17, 13, 12, 9, 8, 6, 5, 3, 2], // Sesuai gambar
    backgroundColor: [
      "#8b5cf6", // Living room
      "#6366f1", // Kids
      "#3b82f6", // Office
      "#0ea5e9", // Bedroom
      "#06b6d4", // Kitchen
      "#ec4899", // Bathroom
      "#f43f5e", // Dining room
      "#f59e0b", // Decor
      "#10b981", // Lighting
      "#22c55e"  // Outdoor
    ],
    borderWidth: 0,
    cutout: "60%", // Membuat efek donut
    borderRadius: 6,
    spacing: 8
  }]
};

document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("ChartProduk");
  if (ctx) {
    new Chart(ctx, {
      type: "doughnut",
      data: dataDonut,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: (context) => {
                const label = context.label || '';
                const value = context.raw || 0;
                return `${label}: ${value}%`;
              }
            }
          }
        }
      }
    });
  }
});
