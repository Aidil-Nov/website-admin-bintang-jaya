import Chart from "chart.js/auto";

const dataProfit = [
    5000000, 4000000, 200000, 300000, 1200000, 120000, 30000, 2300000, 210000,
    900000, 211100, 220000,
];
const labels = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
];

// 1. Determine colors based on income changes
const backgroundColors = dataProfit.map((profit, index) => {
    if (index === 0) return "oklch(72.3% 0.219 149.579)"; // Default color for first month

    const profitSebelumnya = dataProfit[index - 1];

    return profit > profitSebelumnya
        ? "oklch(72.3% 0.219 149.579)" // Green if increased
        : profit < profitSebelumnya
        ? "#EF4444" // Red if decreased
        : "oklch(72.3% 0.219 149.579)"; // Original color if equal
});

document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("ChartProfit");
    if (ctx) {
        new Chart(ctx, {
            type: "line",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "profit (Rp)",
                        data: dataProfit,
                        backgroundColor: backgroundColors,
                        borderColor: backgroundColors.map((color) =>
                            color === "#10B981"
                                ? "#059669"
                                : color === "#EF4444"
                                ? "#DC2626"
                                : "oklch(60% 0.219 149.579)"
                        ),
                        tension: 0.3,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function (value) {
                                return "Rp" + value.toLocaleString("id-ID");
                            },
                        },
                    },
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let label = context.dataset.label || "";
                                if (label) {
                                    label += ": ";
                                }
                                label +=
                                    "Rp" + context.raw.toLocaleString("id-ID");

                                // Add trend indicator
                                if (context.dataIndex > 0) {
                                    const current = context.raw;
                                    const previous =
                                        dataProfit[context.dataIndex - 1];
                                    const difference = current - previous;
                                    const percentage = (
                                        (Math.abs(difference) / previous) *
                                        100
                                    ).toFixed(1);

                                    if (difference > 0) {
                                        label += ` (↑ Rp${difference.toLocaleString(
                                            "id-ID"
                                        )}, +${percentage}%)`;
                                    } else if (difference < 0) {
                                        label += ` (↓ Rp${Math.abs(
                                            difference
                                        ).toLocaleString(
                                            "id-ID"
                                        )}, -${percentage}%)`;
                                    } else {
                                        label += " (Stabil)";
                                    }
                                }
                                return label;
                            },
                        },
                    },
                },
            },
        });
    }
});
