# wp profile

Quickly identify what's slow with WordPress.

### EXAMPLES

    # See an overview for each stage of the load process.
    $ wp profile stage --fields=stage,time,cache_ratio
    +------------+---------+-------------+
    | stage      | time    | cache_ratio |
    +------------+---------+-------------+
    | bootstrap  | 0.7994s | 93.21%      |
    | main_query | 0.0123s | 94.29%      |
    | template   | 0.792s  | 91.23%      |
    +------------+---------+-------------+
    | total (3)  | 1.6037s | 92.91%      |
    +------------+---------+-------------+

    # Dive into hook performance for a given stage.
    $ wp profile stage bootstrap --fields=hook,time,cache_ratio --spotlight
    +--------------------------+---------+-------------+
    | hook                     | time    | cache_ratio |
    +--------------------------+---------+-------------+
    | muplugins_loaded:before  | 0.2335s | 40%         |
    | muplugins_loaded         | 0.0007s | 50%         |
    | plugins_loaded:before    | 0.2792s | 77.63%      |
    | plugins_loaded           | 0.1502s | 100%        |
    | after_setup_theme:before | 0.068s  | 100%        |
    | init                     | 0.2643s | 96.88%      |
    | wp_loaded:after          | 0.0377s |             |
    +--------------------------+---------+-------------+
    | total (7)                | 1.0335s | 77.42%      |
    +--------------------------+---------+-------------+


