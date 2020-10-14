const Chart = require('frappe-charts/dist/frappe-charts.min.cjs');

let data = {
    labels: ["2月", "4月", "6月", "8月", "10月", "12月"],

    datasets: [
        {
            title: "Readingスコア",
            color: "light-blue",
            values: [5, 5.5, 6, 5.5, 5.5, 6.5]
        },
        {
            title: "Writingスコア",
            color: "orange",
            values: [6, 6.5, 6, 6, 6.5, 7]
        }
    ]
};

let chart = new Chart({
    parent: "#chart", // or a DOM element
    title: "IELTS スコア",
    data: data,
    type: "line",
    height: 250,
    format_tooltip_x: d => (d + "").toUpperCase(),
    format_tooltip_y: d => d + " pts"
});
