WebWorker pool
========

Experiment with pools and webworkers

```js
    // new worker pool with 10 instances of the worker
    var pool = new WorkerPool('js/worker.js', 10);

    // register callback to worker's onmessage event
    pool.registerOnMessage(function (e) {
        console.log("Received (from worker): ", e.data);
    });
```

