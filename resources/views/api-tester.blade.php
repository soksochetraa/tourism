<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      :root {
        --primary-color: #6366f1;
        --primary-hover: #4f46e5;
        --primary-light: #e0e7ff;
        --text-color: #1f2937;
        --border-color: #e2e8f0;
        --bg-color: #ffffff;
        --shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --focus-ring: 0 0 0 3px rgba(99, 102, 241, 0.3);
        --transition: all 0.2s ease-in-out;
      }

      * {
        font-family: 'Poppins', sans-serif;
      }

      .mono {
        font-family: 'JetBrains Mono', monospace;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        width: 100%;
        background-color: var(--bg-color);
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        box-shadow: var(--shadow);
        z-index: 20;
        margin-top: 0.25rem;
      }

      .dropdown-content.show {
        display: block;
      }

      .dropdown-option {
        padding: 0.75rem 1rem;
        cursor: pointer;
        transition: var(--transition);
      }

      .dropdown-option:hover {
        background-color: var(--primary-light);
        color: var(--primary-hover);
      }

      .dropdown-button {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 1rem;
        background-color: var(--bg-color);
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        cursor: pointer;
        transition: var(--transition);
        text-align: left;
      }

      .dropdown-button:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: var(--focus-ring);
      }

      .dropdown-button:hover {
        border-color: var(--primary-color);
      }

      .dropdown-icon {
        width: 1.25rem;
        height: 1.25rem;
        color: #888;
        transition: transform 0.2s;
      }

      .dropdown-icon.open {
        transform: rotate(180deg);
      }

      .operation-section {
        transition: all 0.3s ease;
      }

      pre {
        transition: all 0.3s ease;
      }

      .btn {
        transition: var(--transition);
        font-weight: 500;
        letter-spacing: 0.025em;
      }

      .btn:hover {
        transform: translateY(-1px);
      }

      input,
      textarea {
        transition: var(--transition);
      }

      input:focus,
      textarea:focus {
        border-color: var(--primary-color);
        box-shadow: var(--focus-ring);
      }

      /* Better textarea styling */
      .json-textarea {
        min-height: 220px;
        white-space: pre;
        overflow-wrap: normal;
        overflow-x: auto;
      }
    </style>
  </head>
  <body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <div class="max-w-6xl mx-auto p-6">
      <div class="text-center mb-10">
        <h1 class="text-7xl font-bold text-rose-700 mb-2">
          Tourism
        </h1>
        <p class="text-gray-600">CRUD</p>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg mb-8 border border-gray-100">
        <h2 class="text-2xl font-semibold mb-6 text-rose-700 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg>
          Register
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input
              type="text"
              id="register-name"
              placeholder="Full Name"
              value="Test User"
              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500"
            />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input
              type="email"
              id="register-email"
              placeholder="Email"
              value="newuser@example.com"
              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500"
            />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input
              type="password"
              id="register-password"
              placeholder="Password"
              value="password123"
              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500"
            />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input
              type="password"
              id="register-password_confirmation"
              placeholder="Confirm Password"
              value="password123"
              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500"
            />
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
            <div class="relative">
              <button id="register-role-button" class="dropdown-button">
                <span id="register-role-label">Select Role</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="register-role-dropdown" class="dropdown-content">
                <div class="dropdown-option" data-value="user">User</div>
                <div class="dropdown-option" data-value="admin">Admin</div>
              </div>
            </div>
          </div>
        </div>
        <button
          onclick="register()"
          class="btn bg-rose-600 hover:bg-rose-700 text-white px-6 py-3 rounded-lg shadow-md flex items-center justify-center w-full md:w-auto"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
          </svg>
          Register
        </button>
        <pre id="register-response" class="mt-6 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-64 mono"></pre>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg mb-8 border border-gray-100">
        <h2 class="text-2xl font-semibold mb-6 text-rose-700 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
          Login
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input
              type="email"
              id="login-email"
              placeholder="Email"
              value="admin@example.com"
              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500"
            />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input
              type="password"
              id="login-password"
              placeholder="Password"
              value="password123"
              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500"
            />
          </div>
        </div>
        <button
          onclick="login()"
          class="btn bg-rose-600 hover:bg-rose-700 text-white px-6 py-3 rounded-lg shadow-md flex items-center justify-center w-full md:w-auto"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          Login
        </button>
        <pre id="login-response" class="mt-6 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-64 mono"></pre>
      </div>

      <div id="api-sections" class="space-y-8"></div>
    </div>

    <script>
      let token = "";
      const apiBase = "";

      // Initialize all dropdowns
      function initDropdowns() {
        // Role dropdown
        const roleButton = document.getElementById("register-role-button");
        const roleDropdown = document.getElementById("register-role-dropdown");
        const roleLabel = document.getElementById("register-role-label");
        const roleOptions = roleDropdown.querySelectorAll(".dropdown-option");

        roleButton.addEventListener("click", (e) => {
          e.preventDefault();
          roleDropdown.classList.toggle("show");
          roleButton.querySelector(".dropdown-icon").classList.toggle("open");
        });

        roleOptions.forEach((option) => {
          option.addEventListener("click", () => {
            roleLabel.textContent = option.textContent;
            roleDropdown.classList.remove("show");
            roleButton.querySelector(".dropdown-icon").classList.remove("open");
          });
        });

        // Close dropdowns when clicking outside
        document.addEventListener("click", function (e) {
          if (!roleButton.contains(e.target) && !roleDropdown.contains(e.target)) {
            roleDropdown.classList.remove("show");
            roleButton.querySelector(".dropdown-icon").classList.remove("open");
          }
        });
      }

      function register() {
        const name = document.getElementById("register-name").value;
        const email = document.getElementById("register-email").value;
        const password = document.getElementById("register-password").value;
        const password_confirmation = document.getElementById("register-password_confirmation").value;
        const role = document.getElementById("register-role-label").textContent.trim().toLowerCase();

        fetch("/register", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          body: JSON.stringify({
            name,
            email,
            password,
            password_confirmation,
            role,
          }),
        })
          .then((res) => res.json())
          .then((data) => {
            const pre = document.getElementById("register-response");
            pre.textContent = JSON.stringify(data, null, 2);
            if (data.token) {
              token = data.token;
              pre.innerHTML += '\n\n<span class="text-green-600 font-medium">Token saved successfully!</span>';
            }
          })
          .catch((error) => {
            document.getElementById("register-response").textContent = error.message;
          });
      }

      function login() {
        const email = document.getElementById("login-email").value;
        const password = document.getElementById("login-password").value;
        fetch("/login", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          body: JSON.stringify({ email, password }),
        })
          .then((res) => res.json())
          .then((data) => {
            const pre = document.getElementById("login-response");
            pre.textContent = JSON.stringify(data, null, 2);
            if (data.token) {
              token = data.token;
              pre.innerHTML += '\n\n<span class="text-green-600 font-medium">Token saved successfully!</span>';
              renderSections();
            }
          })
          .catch((err) => {
            document.getElementById("login-response").textContent = err.message;
          });
      }

      const getByNamePathPatterns = {
        provincedestination: "province",
        provincerestaurant: "province",
        eventdestination: "event",
      };

      function apiCall(method, endpoint, textareaId, responseId, extraPath = "", queryParam = "") {
        let url = apiBase + "/" + endpoint;

        if (method === "GET" && queryParam) {
          const baseKey = endpoint.replace(/\//g, "-");
          let segment = getByNamePathPatterns[endpoint] || getByNamePathPatterns[baseKey];

          if (endpoint === "provincedestination") {
            segment = "province";
          } else if (endpoint === "provincerestaurant") {
            segment = "restaurant";
          } else if (endpoint === "eventdestination") {
            segment = "event";
          } else {
            segment = "name";
          }

          const nameVal = decodeURIComponent(queryParam.split("=")[1]);
          url += "/" + segment + "/" + encodeURIComponent(nameVal);
          queryParam = "";
        }

        if (extraPath) url += "/" + encodeURIComponent(extraPath);

        let fetchOptions = {
          method,
          headers: {
            Authorization: "Bearer " + token,
            Accept: "application/json",
          },
        };

        if (textareaId && method !== "GET") {
          const rawBody = document.getElementById(textareaId).value;
          try {
            fetchOptions.headers["Content-Type"] = "application/json";
            fetchOptions.body = JSON.stringify(JSON.parse(rawBody));
          } catch (e) {
            document.getElementById(responseId).textContent = "Invalid JSON body: " + e.message;
            return;
          }
        }

        fetch(url, fetchOptions)
          .then(async (res) => {
            const data = await res.json();
            const pre = document.getElementById(responseId);
            pre.textContent = JSON.stringify(data, null, 2);

            if (!res.ok) {
              pre.innerHTML = `<span class="text-red-600 font-medium">Error ${res.status}: ${res.statusText}</span>\n\n` + pre.innerHTML;
            }
          })
          .catch((err) => {
            document.getElementById(responseId).innerHTML = `<span class="text-red-600 font-medium">Error:</span> ${err.message}`;
          });
      }

      const endpoints = [
        {
          name: "Provinces",
          endpoint: "provinces",
          postSample: {
            name: "Kampot",
            description: "Coastal province with beautiful beaches",
            region: "South"
          },
        },
        {
          name: "Restaurants",
          endpoint: "restaurants",
          postSample: {
            name: "Seaside Restaurant",
            address: "123 Beach Road",
            phone: "+855123456789",
            email: "info@seaside.com",
            website: "https://seaside.com",
            description: "Fresh seafood with ocean view",
            opening_hours: "07:00 - 22:00"
          },
        },
        {
          name: "Destinations",
          endpoint: "destinations",
          postSample: {
            name: "Bokor Mountain",
            location: "Kampot Province",
            description: "Scenic mountain with historic buildings"
          },
        },
        {
          name: "Events",
          endpoint: "events",
          postSample: {
            name: "Kampot Pepper Festival",
            description: "Annual celebration of Kampot pepper",
            location: "Kampot Town",
            start_date: "2025-05-15 09:00:00",
            end_date: "2025-05-17 21:00:00"
          },
        },
        {
          name: "Event-Destination",
          endpoint: "eventdestination",
          postSample: { 
            event_id: 1, 
            destination_id: 1 
          },
        },
        {
          name: "Province-Destination",
          endpoint: "provincedestination",
          postSample: { 
            province_id: 1, 
            destination_id: 1 
          },
        },
        {
          name: "Province-Restaurant",
          endpoint: "provincerestaurant",
          postSample: { 
            province_id: 1, 
            restaurant_id: 1 
          },
        },
      ];

      function showOperation(tableId, operation) {
        const container = document.getElementById(tableId);
        if (!container) return;
        const sections = container.querySelectorAll(".operation-section");
        sections.forEach((s) => s.classList.add("hidden"));
        if (operation) {
          const section = document.getElementById(`${tableId}-${operation}`);
          if (section) {
            section.classList.remove("hidden");
            section.scrollIntoView({ behavior: "smooth", block: "nearest" });
          }
        }
      }

      function createDropdown(tableId) {
        const options = [
          { val: "", label: "Select Route" },
          { val: "getAll", label: "GET All" },
          { val: "getById", label: "GET by ID" },
          { val: "getByName", label: "GET by Name" },
          { val: "create", label: "CREATE" },
          { val: "update", label: "UPDATE" },
          { val: "delete", label: "DELETE" },
        ];

        const dropdownId = `${tableId}-dropdown`;
        const buttonId = `${tableId}-dropdown-button`;
        const labelId = `${tableId}-dropdown-label`;

        return `
        <div class="relative mb-6">
          <button id="${buttonId}" class="dropdown-button">
            <span id="${labelId}">Select Route</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="${dropdownId}" class="dropdown-content">
            ${options.map(o => `<div class="dropdown-option" data-value="${o.val}">${o.label}</div>`).join("")}
          </div>
        </div>`;
      }

      function initOperationDropdowns() {
        document.querySelectorAll('[id$="-dropdown-button"]').forEach((button) => {
          const dropdownId = button.id.replace("-button", "");
          const dropdown = document.getElementById(dropdownId);
          const labelId = button.id.replace("-button", "-label");
          const label = document.getElementById(labelId);
          const tableId = button.id.split("-")[0];

          button.addEventListener("click", (e) => {
            e.preventDefault();
            dropdown.classList.toggle("show");
            button.querySelector(".dropdown-icon").classList.toggle("open");
          });

          dropdown.querySelectorAll(".dropdown-option").forEach((option) => {
            option.addEventListener("click", () => {
              label.textContent = option.textContent;
              dropdown.classList.remove("show");
              button.querySelector(".dropdown-icon").classList.remove("open");
              showOperation(tableId, option.dataset.value);
            });
          });
        });

        // Close dropdowns when clicking outside
        document.addEventListener("click", function (e) {
          document.querySelectorAll('[id$="-dropdown"]').forEach((dropdown) => {
            const buttonId = dropdown.id.replace("-dropdown", "-dropdown-button");
            const button = document.getElementById(buttonId);

            if (!button.contains(e.target) && !dropdown.contains(e.target)) {
              dropdown.classList.remove("show");
              button.querySelector(".dropdown-icon").classList.remove("open");
            }
          });
        });
      }

      function renderSections() {
        const container = document.getElementById("api-sections");
        container.innerHTML = "";

        endpoints.forEach((ep) => {
          const tableId = ep.endpoint.replace(/\//g, "-");
          const sampleJson = JSON.stringify(ep.postSample, null, 2);
          
          container.innerHTML += `
          <div id="${tableId}" class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
              </svg>
              ${ep.name}
              <span class="ml-auto text-sm mono bg-rose-100 text-rose-800 px-3 py-1 rounded-full">/${ep.endpoint}</span>
            </h2>
            
            ${createDropdown(tableId)}
            
            <!-- GET All Section -->
            <div id="${tableId}-getAll" class="operation-section hidden">
              <button onclick="apiCall('GET', '${ep.endpoint}', null, '${tableId}-getAll-response')" 
                class="btn bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow-md w-full md:w-auto">
                GET All ${ep.name}
              </button>
              <pre id="${tableId}-getAll-response" class="mt-4 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-96 mono"></pre>
            </div>

            <!-- GET by ID Section -->
            <div id="${tableId}-getById" class="operation-section hidden space-y-4">
              <div class="flex flex-col md:flex-row md:items-end gap-4">
                <div class="flex-1">
                  <label class="block text-sm font-medium text-gray-700 mb-1">Enter ID</label>
                  <input id="${tableId}-getById-input" type="number" placeholder="ID" 
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500" />
                </div>
                <button onclick="apiCall('GET', '${ep.endpoint}', null, '${tableId}-getById-response', document.getElementById('${tableId}-getById-input').value)" 
                  class="btn bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow-md w-full md:w-auto">
                  GET by ID
                </button>
              </div>
              <pre id="${tableId}-getById-response" class="mt-2 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-96 mono"></pre>
            </div>

            <!-- GET by Name Section -->
            <div id="${tableId}-getByName" class="operation-section hidden space-y-4">
              <div class="flex flex-col md:flex-row md:items-end gap-4">
                <div class="flex-1">
                  <label class="block text-sm font-medium text-gray-700 mb-1">Enter Name</label>
                  <input id="${tableId}-getByName-input" type="text" placeholder="Name" 
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500" />
                </div>
                <button onclick="apiCall('GET', '${ep.endpoint}', null, '${tableId}-getByName-response', '', 'name=' + encodeURIComponent(document.getElementById('${tableId}-getByName-input').value))" 
                  class="btn bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow-md w-full md:w-auto">
                  GET by Name
                </button>
              </div>
              <pre id="${tableId}-getByName-response" class="mt-2 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-96 mono"></pre>
            </div>

            <!-- CREATE Section -->
            <div id="${tableId}-create" class="operation-section hidden space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Request Body:</label>
                <textarea id="${tableId}-create-textarea" rows="8" 
                  class="w-full json-textarea px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500 text-sm mono">${sampleJson}</textarea>
              </div>
              <button onclick="apiCall('POST', '${ep.endpoint}', '${tableId}-create-textarea', '${tableId}-create-response')" 
                class="btn bg-rose-600 hover:bg-rose-700 text-white px-6 py-3 rounded-lg shadow-md w-full md:w-auto">
                CREATE ${ep.name}
              </button>
              <pre id="${tableId}-create-response" class="mt-2 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-96 mono"></pre>
            </div>

            <!-- UPDATE Section -->
            <div id="${tableId}-update" class="operation-section hidden space-y-4">
              <div class="flex flex-col md:flex-row md:items-end gap-4 mb-4">
                <div class="flex-1">
                  <label class="block text-sm font-medium text-gray-700 mb-1">ID to Update</label>
                  <input id="${tableId}-update-id" type="number" placeholder="ID" 
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500" />
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Request Body:</label>
                <textarea id="${tableId}-update-textarea" rows="8" 
                  class="w-full json-textarea px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500 text-sm mono">${sampleJson}</textarea>
              </div>
              <button onclick="apiCall('PATCH', '${ep.endpoint}', '${tableId}-update-textarea', '${tableId}-update-response', document.getElementById('${tableId}-update-id').value)" 
                class="btn bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-3 rounded-lg shadow-md w-full md:w-auto">
                UPDATE ${ep.name}
              </button>
              <pre id="${tableId}-update-response" class="mt-2 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-96 mono"></pre>
            </div>

            <!-- DELETE Section -->
            <div id="${tableId}-delete" class="operation-section hidden space-y-4">
              <div class="flex flex-col md:flex-row md:items-end gap-4">
                <div class="flex-1">
                  <label class="block text-sm font-medium text-gray-700 mb-1">ID to Delete</label>
                  <input id="${tableId}-delete-id" type="number" placeholder="ID" 
                    class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-rose-200 focus:border-rose-500" />
                </div>
                <button onclick="apiCall('DELETE', '${ep.endpoint}', null, '${tableId}-delete-response', document.getElementById('${tableId}-delete-id').value)" 
                  class="btn bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg shadow-md w-full md:w-auto">
                  DELETE ${ep.name}
                </button>
              </div>
              <pre id="${tableId}-delete-response" class="mt-2 bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm overflow-auto max-h-96 mono"></pre>
            </div>
          </div>
        `;
        });

        initOperationDropdowns();
      }

      // Initialize the page
      document.addEventListener("DOMContentLoaded", () => {
        initDropdowns();
        renderSections();
      });
    </script>
  </body>
</html>