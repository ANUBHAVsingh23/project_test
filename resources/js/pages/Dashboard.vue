<template>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Dashboard</h1>
            <div class="flex space-x-3">
                <button @click="showStartupModal = true" class="btn-primary flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Startup
                </button>
                <button class="btn-secondary flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Export Data
                </button>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="card bg-gradient-to-br from-blue-600 to-blue-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-500 bg-opacity-30">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h3 class="text-lg font-medium text-white">Total Startups</h3>
                        <div class="flex items-baseline flex-wrap">
                            <p class="text-2xl font-semibold text-white">{{ stats.totalStartups }}</p>
                            <p class="ml-2 text-sm text-blue-200 whitespace-nowrap">+{{ stats.startupGrowth }}% from last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-gradient-to-br from-green-600 to-green-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-500 bg-opacity-30">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h3 class="text-lg font-medium text-white">Total Funding</h3>
                        <div class="flex items-baseline flex-wrap">
                            <p class="text-2xl font-semibold text-white">${{ formatNumber(stats.totalFunding) }}</p>
                            <p class="ml-2 text-sm text-green-200 whitespace-nowrap">+{{ stats.fundingGrowth }}% from last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-gradient-to-br from-purple-600 to-purple-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-500 bg-opacity-30">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h3 class="text-lg font-medium text-white">Active Investors</h3>
                        <div class="flex items-baseline flex-wrap">
                            <p class="text-2xl font-semibold text-white">{{ stats.activeInvestors }}</p>
                            <p class="ml-2 text-sm text-purple-200 whitespace-nowrap">+{{ stats.investorGrowth }}% from last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-gradient-to-br from-yellow-600 to-yellow-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-500 bg-opacity-30">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h3 class="text-lg font-medium text-white">Success Rate</h3>
                        <div class="flex items-baseline flex-wrap">
                            <p class="text-2xl font-semibold text-white">{{ stats.successRate }}%</p>
                            <p class="ml-2 text-sm text-yellow-200 whitespace-nowrap">+{{ stats.successGrowth }}% from last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Funding Trends Chart -->
            <div class="card">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-white">Funding Trends</h3>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-xs rounded-full bg-gray-700 text-white">Monthly</button>
                        <button class="px-3 py-1 text-xs rounded-full bg-primary-600 text-white">Quarterly</button>
                        <button class="px-3 py-1 text-xs rounded-full bg-gray-700 text-white">Yearly</button>
                    </div>
                </div>
                <div class="h-80">
                    <canvas ref="fundingChart"></canvas>
                </div>
            </div>

            <!-- Industry Distribution Chart -->
            <div class="card">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-white">Industry Distribution</h3>
                    <button class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>
                <div class="h-80">
                    <canvas ref="industryChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Activity and Top Startups -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Recent Activity -->
            <div class="card">
                <h3 class="text-lg font-medium text-white mb-4">Recent Activity</h3>
                <div class="flow-root">
                    <ul class="-mb-8">
                        <li v-for="(activity, index) in recentActivity" :key="index">
                            <div class="relative pb-8">
                                <span v-if="index !== recentActivity.length - 1" class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-700" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span :class="getActivityIconClass(activity.type)" class="h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-gray-800">
                                            <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path v-if="activity.type === 'funding'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                <path v-else-if="activity.type === 'launch'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                <path v-else-if="activity.type === 'partnership'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-white">{{ activity.description }}</p>
                                        </div>
                                        <div class="text-right text-sm whitespace-nowrap text-gray-400">
                                            <time :datetime="activity.date">{{ formatDate(activity.date) }}</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Top Startups -->
            <div class="card">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-white">Top Startups</h3>
                    <a href="/startups" class="text-sm text-primary-400 hover:text-primary-300">View all</a>
                </div>
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Startup</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Industry</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Funding</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Growth</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <tr v-for="startup in topStartups" :key="startup.id" class="hover:bg-gray-800">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" :src="startup.logo" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-white">{{ startup.name }}</div>
                                            <div class="text-sm text-gray-400">{{ startup.location }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">{{ startup.industry }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">${{ formatNumber(startup.funding) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="getGrowthBadgeClass(startup.growth)" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                                        {{ startup.growth > 0 ? '+' : '' }}{{ startup.growth }}%
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Startup Form Modal -->
        <div v-if="showStartupModal" class="fixed inset-0 overflow-y-auto z-50">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
                </div>
                
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                
                <div class="inline-block align-bottom bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full max-h-[90vh] overflow-y-auto">
                    <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-primary-600 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                <h3 class="text-lg leading-6 font-medium text-white">
                                    Add New Startup
                                </h3>
                                <div class="mt-4">
                                    <form @submit.prevent="submitStartup" class="space-y-4">
                                        <!-- Basic Information -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="name" class="block text-sm font-medium text-gray-300">Name*</label>
                                                <input type="text" id="name" v-model="startupForm.name" class="mt-1 input-field w-full" required />
                                            </div>
                                            <div>
                                                <label for="website" class="block text-sm font-medium text-gray-300">Website</label>
                                                <input type="url" id="website" v-model="startupForm.website" class="mt-1 input-field w-full" placeholder="https://..." />
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="location" class="block text-sm font-medium text-gray-300">Location*</label>
                                                <input type="text" id="location" v-model="startupForm.location" class="mt-1 input-field w-full" required />
                                            </div>
                                            <div>
                                                <label for="logo" class="block text-sm font-medium text-gray-300">Logo URL</label>
                                                <input type="url" id="logo" v-model="startupForm.logo" class="mt-1 input-field w-full" placeholder="https://..." />
                                            </div>
                                        </div>

                                        <!-- Industry & Stage -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="industry" class="block text-sm font-medium text-gray-300">Industry*</label>
                                                <select id="industry" v-model="startupForm.industry" class="mt-1 input-field w-full" required>
                                                    <option value="">Select Industry</option>
                                                    <option v-for="industry in industries" :key="industry" :value="industry">{{ industry }}</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="stage" class="block text-sm font-medium text-gray-300">Stage*</label>
                                                <select id="stage" v-model="startupForm.stage" class="mt-1 input-field w-full" required>
                                                    <option value="">Select Stage</option>
                                                    <option v-for="stage in stages" :key="stage" :value="stage">{{ stage }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Funding Information -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="funding" class="block text-sm font-medium text-gray-300">Funding Amount (in millions)*</label>
                                                <input type="number" id="funding" v-model="startupForm.funding" step="0.01" min="0" class="mt-1 input-field w-full" required />
                                            </div>
                                            <div>
                                                <label for="funding_round" class="block text-sm font-medium text-gray-300">Funding Round*</label>
                                                <select id="funding_round" v-model="startupForm.funding_round" class="mt-1 input-field w-full" required>
                                                    <option value="">Select Round</option>
                                                    <option v-for="round in fundingRounds" :key="round" :value="round">{{ round }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div>
                                            <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                                            <textarea id="description" v-model="startupForm.description" rows="3" class="mt-1 input-field w-full"></textarea>
                                        </div>

                                        <!-- Technologies -->
                                        <div>
                                            <label for="technologies" class="block text-sm font-medium text-gray-300">Technologies</label>
                                            <input 
                                                type="text" 
                                                v-model="startupForm.technologies" 
                                                placeholder="Comma separated" 
                                                class="mt-1 input-field w-full"
                                            />
                                        </div>

                                        <!-- Employee Numbers -->
                                        <div>
                                            <label for="emp_numbers" class="block text-sm font-medium text-gray-300">Employee Numbers</label>
                                            <input type="number" id="emp_numbers" v-model="startupForm.emp_numbers" class="mt-1 input-field w-full" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button 
                            @click="submitStartup" 
                            type="button" 
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary-600 text-base font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:ml-3 sm:w-auto sm:text-sm"
                        >
                            Save Startup
                        </button>
                        <button 
                            @click="showStartupModal = false" 
                            type="button" 
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-600 shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-gray-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import { Chart, registerables } from 'chart.js';
import { Line, Doughnut } from 'vue-chartjs';
import axios from 'axios';

Chart.register(...registerables);

export default {
    name: 'Dashboard',
    components: {
        Line,
        Doughnut
    },
    setup() {
        const fundingChart = ref(null);
        const industryChart = ref(null);
        const showStartupModal = ref(false);
        
        // Initialize data with loading state
        const stats = ref({
            totalStartups: '...',
            startupGrowth: '...',
            totalFunding: '...',
            fundingGrowth: '...',
            activeInvestors: '...',
            investorGrowth: '...',
            successRate: '...',
            successGrowth: '...'
        });

        const recentActivity = ref([]);
        const topStartups = ref([]);
        const fundingTrendsData = ref([]);
        const industryData = ref({
            labels: [],
            data: []
        });
        
        // Charts instances
        let fundingChartInstance = null;
        let industryChartInstance = null;

        // Fetch dashboard data
        const fetchDashboardData = async () => {
            try {
                const baseUrl = window.location.origin;
                const response = await axios.get(`${baseUrl}/api/dashboard-data`, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    withCredentials: true
                });
                
                const data = response.data;
                
                // Update statistics
                stats.value = data.stats;
                
                // Update funding trends chart data
                fundingTrendsData.value = data.fundingTrends;
                updateFundingTrendsChart();
                
                // Update industry distribution chart
                const industriesData = data.industries;
                industryData.value = {
                    labels: industriesData.map(item => item.industry),
                    data: industriesData.map(item => item.total)
                };
                updateIndustryChart();
                
                // Update top startups
                topStartups.value = data.topStartups;
                
                // Fetch recent activity (could be added to backend)
                // For now we'll keep the sample activity data
                fetchRecentActivity();
                
            } catch (error) {
                console.error('Error fetching dashboard data:', error);
                alert('Failed to load dashboard data');
            }
        };
        
        const fetchRecentActivity = () => {
            // In a real application, this would fetch from the backend
            // For now, we'll use sample data
            recentActivity.value = [
                {
                    type: 'funding',
                    description: 'TechStart Inc. raised $10M in Series A funding',
                    date: '2024-03-15T10:00:00Z'
                },
                {
                    type: 'launch',
                    description: 'HealthTech Solutions launched their new AI platform',
                    date: '2024-03-14T15:30:00Z'
                },
                {
                    type: 'partnership',
                    description: 'FinTech Innovations partnered with Global Bank',
                    date: '2024-03-13T09:15:00Z'
                },
                {
                    type: 'funding',
                    description: 'EcoGreen raised $5M in seed funding',
                    date: '2024-03-12T14:45:00Z'
                },
                {
                    type: 'other',
                    description: 'AI Solutions expanded to European market',
                    date: '2024-03-11T11:20:00Z'
                }
            ];
        };
        
        // Update funding trends chart with real data
        const updateFundingTrendsChart = () => {
            if (fundingChartInstance) {
                fundingChartInstance.destroy();
            }
            
            if (fundingChart.value) {
                const ctx = fundingChart.value.getContext('2d');
                fundingChartInstance = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: fundingTrendsData.value.map(item => item.month),
                        datasets: [
                            {
                                label: 'Funding Amount ($M)',
                                data: fundingTrendsData.value.map(item => item.funding),
                                fill: false,
                                borderColor: '#3B82F6',
                                tension: 0.4
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)'
                                },
                                ticks: {
                                    color: 'rgba(255, 255, 255, 0.7)'
                                }
                            },
                            x: {
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)'
                                },
                                ticks: {
                                    color: 'rgba(255, 255, 255, 0.7)'
                                }
                            }
                        }
                    }
                });
            }
        };
        
        // Update industry chart with real data
        const updateIndustryChart = () => {
            if (industryChartInstance) {
                industryChartInstance.destroy();
            }
            
            if (industryChart.value) {
                const ctx = industryChart.value.getContext('2d');
                industryChartInstance = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: industryData.value.labels,
                        datasets: [
                            {
                                data: industryData.value.data,
                                backgroundColor: [
                                    '#3B82F6',
                                    '#10B981',
                                    '#F59E0B',
                                    '#EF4444',
                                    '#8B5CF6',
                                    '#6B7280'
                                ]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'right',
                                labels: {
                                    color: 'rgba(255, 255, 255, 0.7)'
                                }
                            }
                        }
                    }
                });
            }
        };

        // Initialize and set up auto-refresh
        onMounted(() => {
            fetchDashboardData();
            
            // Refresh data every minute (60000 ms)
            const refreshInterval = setInterval(() => {
                fetchDashboardData();
            }, 60000);
            
            // Clean up interval on component unmount
            return () => {
                clearInterval(refreshInterval);
                if (fundingChartInstance) fundingChartInstance.destroy();
                if (industryChartInstance) industryChartInstance.destroy();
            };
        });

        // Helper functions
        const formatNumber = (num) => {
            if (num === '...') return '...';
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        };

        const formatDate = (dateString) => {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
        };

        const getActivityIconClass = (type) => {
            const classes = {
                'funding': 'bg-green-500',
                'launch': 'bg-blue-500',
                'partnership': 'bg-purple-500',
                'other': 'bg-gray-500'
            };
            return classes[type] || 'bg-gray-500';
        };

        const getGrowthBadgeClass = (growth) => {
            if (growth > 0) {
                return 'bg-green-100 text-green-800';
            } else if (growth < 0) {
                return 'bg-red-100 text-red-800';
            } else {
                return 'bg-gray-100 text-gray-800';
            }
        };

        // Form data for new startup
        const startupForm = ref({
            name: '',
            website: '',
            location: '',
            logo: '',
            industry: '',
            stage: '',
            funding: null,
            funding_round: '',
            description: '',
            emp_numbers: null,
            technologies: ''  // Changed from array to string
        });

        // Sample industries and stages
        const industries = ref(['AI', 'Healthcare', 'FinTech', 'CleanTech', 'E-commerce', 'Other']);
        const stages = ref(['Seed', 'Series A', 'Series B', 'Series C', 'IPO']);
        const fundingRounds = ref(['Seed', 'Angel', 'VC', 'Debt', 'IPO']);

        // Fix the submitStartup function to properly handle the new schema
        const submitStartup = async () => {
            try {
                // Prepare the form data according to our updated schema
                const formData = {
                    name: startupForm.value.name,
                    website: startupForm.value.website,
                    location: startupForm.value.location,
                    logo: startupForm.value.logo,
                    industry: startupForm.value.industry,
                    stage: startupForm.value.stage,
                    funding: startupForm.value.funding,
                    funding_round: startupForm.value.funding_round,
                    description: startupForm.value.description,
                    // Send employee number as integer
                    emp_numbers: Number(startupForm.value.emp_numbers) || null,
                    // Convert technologies from array to comma-separated string
                    technologies: Array.isArray(startupForm.value.technologies) 
                        ? startupForm.value.technologies.join(', ') 
                        : startupForm.value.technologies || ''
                };

                // Include CSRF token in headers
                const headers = {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                };

                // Get the base URL of the application
                const baseUrl = window.location.origin;
                
                // Make the API request with the correct URL
                // Use either /api/startups or just /startups depending on your API configuration
                const response = await axios.post(`${baseUrl}/api/startups`, formData, { 
                    headers,
                    withCredentials: true // Add this to include cookies in the request
                });
                
                // Show success notification
                alert(response.data.message || 'Startup created successfully');
                
                // Reset form and close modal
                startupForm.value = {
                    name: '',
                    website: '',
                    location: '',
                    logo: '',
                    industry: '',
                    stage: '',
                    funding: null,
                    funding_round: '',
                    description: '',
                    emp_numbers: null,
                    technologies: ''
                };
                showStartupModal.value = false;
                
                // After successful submission, refresh the dashboard data
                fetchDashboardData();
                
            } catch (error) {
                console.error('Error submitting startup:', error);
                let errorMessage = 'Failed to create startup';
                
                if (error.response && error.response.data && error.response.data.errors) {
                    const errors = error.response.data.errors;
                    errorMessage = Object.values(errors).flat().join(', ');
                } else if (error.response && error.response.data && error.response.data.message) {
                    errorMessage = error.response.data.message;
                }
                
                alert('Error: ' + errorMessage);
            }
        };

        return {
            fundingChart,
            industryChart,
            stats,
            recentActivity,
            topStartups,
            formatNumber,
            formatDate,
            getActivityIconClass,
            getGrowthBadgeClass,
            showStartupModal,
            submitStartup,
            startupForm,
            industries,
            stages,
            fundingRounds
        };
    }
};
</script>