const labels = [
    "Postponed",
    "Follow Up",
    "Implementation",
    "Pembayaran",
    "Selesai",
];

const config = {
    type: "bar",
    data: {
        labels: labels,
        datasets: [
            {
                axis: "y",
                fill: false,
                label: "Status Proyek",
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        indexAxis: "y",
        scales: {
            y: {
                beginAtZero: true,
            },
        },
        maintainAspectRatio: false, // Set to false to allow resizing
    },
};

const config2 = {
    type: "doughnut",
    data: {
        labels: [
            "Postponed",
            "Follow Up",
            "Implementation",
            "Payment",
            "Completed",
        ],
        datasets: [
            {
                label: "Status Proyek Perusahaan",
                data: [65, 59, 80, 81, 56],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: false,
            },
        },
        maintainAspectRatio: false, // Set to false to allow resizing
    },
};

const config3 = {
    type: "line",
    data: {
        labels: ["2020", "2021", "2022", "2023", "2024"],
        datasets: [
            {
                label: "Status Keuangan Perusahaan",
                data: [1000000, 2000000, 1500000, 3000000, 4000000],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: false,
            },
        },
        maintainAspectRatio: false, // Set to false to allow resizing
    },
};

var myChart = new Chart(document.getElementById("myChart"), config);

var myChart2 = new Chart(document.getElementById("myChart2"), config2);

var myChart3 = new Chart(document.getElementById("myChart3"), config3);
