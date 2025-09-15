<div class="toolbar">
  <button class="icon-btn valid"><i class="fas fa-check"></i></button>
  <button class="icon-btn add"><i class="fas fa-plus"></i></button>
  <button class="icon-btn image"><i class="fas fa-image"></i></button>
  <button class="icon-btn link"><i class="fas fa-link"></i></button>
  <button class="icon-btn chart"><i class="fas fa-chart-line"></i></button>
  <button class="icon-btn mute"><i class="fas fa-volume-mute"></i></button>
  <button class="icon-btn hidden"><i class="fas fa-eye-slash"></i></button>
  <button class="icon-btn lock"><i class="fas fa-lock"></i></button>
  <input type="date" class="date">
  <input type="date" class="date">
  <button class="icon-btn delete"><i class="fas fa-times"></i></button>
</div>

<style>
.toolbar {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px;
  background: #f4f6f9;
  border-radius: 8px;
}

.icon-btn {
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  color: white;
  font-size: 16px;
  transition: transform 0.2s ease, background 0.2s ease;
}

.icon-btn:hover {
  transform: scale(1.1);
}

.valid { background: #28a745; }
.add { background: #17a2b8; }
.image { background: #007bff; }
.link { background: #6c757d; }
.chart { background: #ffc107; color: black; }
.mute { background: #fd7e14; }
.hidden { background: #6610f2; }
.lock { background: #343a40; }
.delete { background: #dc3545; }

.date {
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 6px;
}
</style>

<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
