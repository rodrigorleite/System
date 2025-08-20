import { getAquisitionsByYear } from './api'
import Chart from 'chart.js/auto'

(async function () {
const data = await getAquisitionsByYear();

    new Chart(
        document.getElementById('acquisitions'),
        {
            type: 'bar',
            data: {
                labels: data.map(row => row.year),
                datasets: [
                    {
                        label: 'Aquisiçôes por ano',
                        data: data.map(row => row.count)
                    }
                ]
            }
        }
    );
})();
