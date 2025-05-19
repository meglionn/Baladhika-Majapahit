<style>
  .admin-header {
    color: #26b1c1;
  }

  .admin-header::after {
    content: "";
    display: block;
    width: 250px;
    height: 4px;
    background-color: #f4d24f;
    margin: 16px auto 0;
    border-radius: 2px;
  }

  .bg-custom {
    background-color: #26b1c1 !important;
  }

  .btn-custom {
    background-color: #26b1c1;
    border-color: #26b1c1;
    color: #fff;
  }

  .btn-custom:hover {
    background-color: #1e9aa7;
    border-color: #1e9aa7;
  }

  .nav-tabs .nav-link {
    font-size: 1.1rem;
    font-weight: 500;
    padding: 0.75rem 1.5rem;
    color: #fff;
    background-color: #26b1c1;
    border: none;
    transition: background-color 0.2s;
  }

  .nav-tabs .nav-link:hover {
    background-color: #33c1d2;
  }

  .nav-tabs .nav-link.active {
    background-color: #1e9aa7;
    color: #fff;
    /* border-bottom: 4px solid #fff; */
  }

  .nav-tabs .nav-link.active::after {
    content: "";
    display: block;
    width: 100%;
    height: 2px;
    background-color: #fff;
    /* margin: 16px auto 0; */
    border-radius: 2px;
  }

  .nav-tabs .nav-link:focus {
    outline: 2px solid #1e9aa7;
    outline-offset: -2px;
  }

  .card-header {
    display: flex;
    justify-content: center;
    border-bottom: 5px solid #f4d24f;
  }

  .card {
    width: 600px;
  }

  .form-tambah-mitra {
    display: flex;
    justify-content: center;
  }
</style>

