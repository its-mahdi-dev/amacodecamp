class StorageManager {
    constructor(key) {
        this.key = key;
    }

    get() {
        const data = localStorage.getItem(this.key);
        return data ? data.split(",") : [];
    }

    set(value) {
        localStorage.setItem(this.key, value.join(","));
        return value; // return updated array
    }

    add(item) {
        let data = this.get();
        if (!data.includes(item)) {
            data.push(item);
            this.set(data);
        }
        return data;
    }

    remove(item) {
        let data = this.get().filter(el => el !== item);
        this.set(data);
        return data;
    }

    clear() {
        localStorage.removeItem(this.key);
    }
}

class Basket {
    constructor() {
        this.storage = new StorageManager("basket");
    }

    getItems() {
        return this.storage.get();
    }

    addToBasket(slug) {
        customAlert("به سبد خرید افزوده شد");
        return this.storage.add(slug);

    }

    removeFromBasket(slug) {
        return this.storage.remove(slug);
    }

    resetBasket(slugs)
    {
        this.storage.clear();
        slugs.forEach(slug => {
            this.storage.add(slug)
        });
        return slugs;
    }

}

// Usage

const basket = new Basket();


function removeFromBasket(slug) {
    basket.removeFromBasket(slug)
}

function isInBasket(slug)
{
    return basket.getItems().includes(slug);
}
function addToBasket(slug) {
    basket.addToBasket(slug)
}



      // localStorage.setItem("auth_token" , "8|zbsoLKdz7h9GtgItR6BM4N6vdYeP09xnI2MHuZ6jb4a86ff9")
      axios.defaults.baseURL = API_URL;

      // Automatically attach the Bearer token from localStorage (or another storage method)
      axios.interceptors.request.use(
          function(config) {
              const token = localStorage.getItem("auth_token"); // Get token from storage
             
               if (token) {
                  config.headers.Authorization = `Bearer ${token}`;
              }
              return config;
          },
          function(error) {
              return Promise.reject(error);
          }
      );

      // Handle 401 responses globally and redirect to /login
      axios.interceptors.response.use(
          function(response) {
              return response; // Return response as-is if no error
          },
          function(error) {
              if (error.response && error.response.status === 401) {
                //   Clear stored token
                  localStorage.removeItem("auth_token");

                //   Redirect to login page
                  window.location.href = "/login";
              }
              return Promise.reject(error);
          }
      );



      function customAlert(message, type = 'info', delay = 3000) {
        if (typeof bootstrap === 'undefined') {
            console.error('Bootstrap is not loaded');
            return;
        }
    
        // Ensure toast container exists
        let toastContainer = document.getElementById('toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.id = 'toast-container';
            toastContainer.className = 'toast-container position-fixed p-3';
            
            // Adjust position based on Bootstrap RTL
            if (document.documentElement.dir === "rtl") {
                toastContainer.classList.add("start-0"); // RTL: bottom-left
            } else {
                toastContainer.classList.add("end-0"); // LTR: bottom-right
            }
    
            toastContainer.style.zIndex = '1050';
            toastContainer.style.bottom = '50px';
            document.body.appendChild(toastContainer);
        }
    
        // Toast type settings
        const toastTypes = {
            success: { title: 'موفقیت آمیز بود ☺️', color: 'bg-success' },
            warning: { title: 'تذکر 👀', color: 'bg-warning' },
            error: { title: 'اتفاق بدی افتاد 🙁', color: 'bg-danger' },
            info: { title: 'پیام 📩', color: 'bg-primary' }
        };
    
        const { title, color } = toastTypes[type] || toastTypes.info;
    
        // Create toast element
        const toastElement = document.createElement('div');
        toastElement.className = 'toast';
        toastElement.setAttribute('role', 'alert');
        toastElement.setAttribute('aria-live', 'assertive');
        toastElement.setAttribute('aria-atomic', 'true');
        toastElement.setAttribute('data-bs-delay', delay);
    
        // Toast content
        toastElement.innerHTML = `
            <div class="toast-header">
                <span class="rounded-circle d-inline-block me-2 ${color}" style="width: 10px; height: 10px;"></span>
                <strong class="me-auto">${title}</strong>
                <small class="text-body-secondary">Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ${message}
                <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar ${color}" role="progressbar" style="width: 100%; transition: width ${delay}ms linear;"></div>
                </div>
            </div>
        `;
    
        // Append toast to container
        toastContainer.appendChild(toastElement);
    
        // Initialize Bootstrap toast
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
    
        // Start the progress bar animation
        setTimeout(() => {
            const progressBar = toastElement.querySelector('.progress-bar');
            progressBar.style.width = '0%';
        }, 100); // Small delay to allow rendering
    
        // Remove toast from DOM after it's hidden
        toastElement.addEventListener('hidden.bs.toast', () => {
            toastElement.remove();
            if (toastContainer.children.length === 0) {
                toastContainer.remove();
            }
        });
    }
    