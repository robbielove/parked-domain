<?php

return [
    /*
     * The webhook URLs that we'll use to send a message to Discord.
     */
    'webhook_urls' => [
        'default' => 'https://discord.com/api/webhooks/1031566509119639612/OK_kdy4Lmcv9Us_EsXJYOKe58rm7Sa0fUG73IKEBq4cAcpVfHDm5ZSXuv73Hvsfyo-xQ',
    ],

    /*
     * This job will send the message to Discord. You can extend this
     * job to set timeouts, retries, etc...
     */
    'job' => Spatie\DiscordAlerts\Jobs\SendToDiscordChannelJob::class,
];
