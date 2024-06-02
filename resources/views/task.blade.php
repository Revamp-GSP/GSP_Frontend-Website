@extends('layouts.form')

@section('container')

<script src="js/task.js"></script>

<div class="title">
    <h4>Proyek Pengadaan Smartphone PT ICON+ SBU JABAR</h4>
</div>
<div class="bar">
  <div class="bar-step active">Postpone</div>
  <div class="bar-step">Follow Up</div>
  <div class="bar-step">Implementasi</div>
  <div class="bar-step">Pembayaran</div>
  <div class="bar-step">Selesai</div>
</div>

<!-- Toggle Section 1 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="1">Permintaan Penawaran Harga User</button>
  <div id="1" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Program Kegiatan</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">Dokumen Output</th>
            <th scope="col">PIC</th>
            <th scope="col">Divisi Terkait</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            <td>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
                <i class='bx bxs-edit'></i>
              </button>

              <!-- Modal Edit -->
              <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="">Program Kegiatan:</label>
                        <input type="text" class="form-control" id="">
                      </div>
                      <div class="form-group">
                        <label for="plan_date_start">Plan Date Start:</label>
                        <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                      </div>
                      <div class="form-group">
                        <label for="plan_date_end">Plan Date End:</label>
                        <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                      </div>
                      <div class="form-group">
                        <label for="formFile" class="form-label">Dokumen Output:</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <div class="form-group">
                        <label for="actual_date_start">Actual Date Start:</label>
                        <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                      </div>
                      <div class="form-group">
                        <label for="actual_date_end">Actual Date End:</label>
                        <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                      </div>
                      <div class="form-group">
                        <label for="pic">PIC:</label>
                        <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                      </div>
                      <div class="form-group">
                        <label for="divisi_terkait">Divisi Terkait :</label>
                        <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                      </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan :</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Save</button>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-danger">
                <i class='bx bxs-trash' ></i>
              </button>
            </td>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Toggle Section 2 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="2">Pengiriman Penawaran Harga User</button>
  <div id="2" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Program Kegiatan</th>
            <th scope="col">Plan Start Date</th>
            <th scope="col">Plan End Date</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Dokumen Output</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">PIC</th>
            <th scope="col">Divisi Terkait</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Toggle Section 3 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="3">Proses Pengadaan</button>
  <div id="3" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">PIC</th>
            <th scope="col">Divisi Terkait</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Toggle Section 4 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="4">Surat Penunjukan Pelaksana Pekerjaan</button>
  <div id="4" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">PIC</th>
            <th scope="col">Divisi Terkait</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Toggle Section 5 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="5">Pembuatan dan Penandatanganan PKS</button>
  <div id="5" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">PIC</th>
            <th scope="col">Divisi Terkait</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Toggle Section 6 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="6">Persiapan Pekerjaan</button>
  <div id="6" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">Responsible</th>
            <th scope="col">Accountable</th>
            <th scope="col">Support</th>
            <th scope="col">Consulted</th>
            <th scope="col">Informed</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Toggle Section 7 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="7">Pelaksanaan Pekerjaan</button>
  <div id="7" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Responsible</th>
            <th scope="col">Accountable</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">Support</th>
            <th scope="col">Consulted</th>
            <th scope="col">Informed</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Toggle Section 8 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="8">BAPS/BAST/BAUK</button>
  <div id="8" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">Responsible</th>
            <th scope="col">Accountable</th>
            <th scope="col">Support</th>
            <th scope="col">Consulted</th>
            <th scope="col">Informed</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Toggle Section 9 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="9">Invoice</button>
  <div id="9" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Responsible</th>
            <th scope="col">Accountable</th>
            <th scope="col">Support</th>
            <th scope="col">Consulted</th>
            <th scope="col">Informed</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Toggle Section 10 -->
<div class="toggle-section">
  <button class="toggle-button" data-target="10">Payment</button>
  <div id="10" class="toggle-content">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
      Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="">Program Kegiatan:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="plan_date_start">Plan Date Start:</label>
              <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
            </div>
            <div class="form-group">
              <label for="plan_date_end">Plan Date End:</label>
              <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Dokumen Output:</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
              <label for="actual_date_start">Actual Date Start:</label>
              <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
            </div>
            <div class="form-group">
              <label for="actual_date_end">Actual Date End:</label>
              <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
            </div>
            <div class="form-group">
              <label for="pic">PIC:</label>
              <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
            </div>
            <div class="form-group">
              <label for="divisi_terkait">Divisi Terkait :</label>
              <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Actual Date End</th>
            <th scope="col">Actual Date Start</th>
            <th scope="col">Plan Date End</th>
            <th scope="col">Plan Date Start</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Responsible</th>
            <th scope="col">Accountable</th>
            <th scope="col">Support</th>
            <th scope="col">Consulted</th>
            <th scope="col">Informed</th>
          </tr>
        </thead>
        <tbody>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal">
              <i class='bx bxs-edit'></i>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Program Kegiatan:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                      <label for="plan_date_start">Plan Date Start:</label>
                      <input type="date" class="form-control" id="plan_date_start" name="plan_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="plan_date_end">Plan Date End:</label>
                      <input type="date" class="form-control" id="plan_date_end" name="plan_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="formFile" class="form-label">Dokumen Output:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                      <label for="actual_date_start">Actual Date Start:</label>
                      <input type="date" class="form-control" id="actual_date_start" name="actual_date_start" required>
                    </div>
                    <div class="form-group">
                      <label for="actual_date_end">Actual Date End:</label>
                      <input type="date" class="form-control" id="actual_date_end" name="actual_date_end" required>
                    </div>
                    <div class="form-group">
                      <label for="pic">PIC:</label>
                      <input type="text" class="form-control" id="pic" name="pic" placeholder="PIC " required>
                    </div>
                    <div class="form-group">
                      <label for="divisi_terkait">Divisi Terkait :</label>
                      <input type="text" class="form-control" id="divisi_terkait" name="divisi_terkait" placeholder="Divisi Terkait " required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan :</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan " required></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger">
              <i class='bx bxs-trash' ></i>
            </button>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection
