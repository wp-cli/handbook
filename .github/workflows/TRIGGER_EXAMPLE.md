# Example: Triggering Handbook Regeneration from wp-cli/wp-cli

To trigger the handbook regeneration from the main wp-cli/wp-cli repository when releasing a new version, add the following step to your release workflow:

```yaml
- name: Trigger handbook regeneration
  uses: peter-evans/repository-dispatch@v2
  with:
    token: ${{ secrets.HANDBOOK_TRIGGER_TOKEN }}
    repository: wp-cli/handbook
    event-type: regenerate-handbook
```

## Setup Requirements

1. Create a GitHub Personal Access Token (PAT) with `repo` scope
2. Add the PAT as a secret named `HANDBOOK_TRIGGER_TOKEN` in the wp-cli/wp-cli repository settings
3. The token must have write access to the wp-cli/handbook repository

## Alternative: Using GITHUB_TOKEN

If you prefer to use the built-in `GITHUB_TOKEN`, you can use:

```yaml
- name: Trigger handbook regeneration
  run: |
    curl -X POST \
      -H "Accept: application/vnd.github.v3+json" \
      -H "Authorization: token ${{ secrets.HANDBOOK_TRIGGER_TOKEN }}" \
      https://api.github.com/repos/wp-cli/handbook/dispatches \
      -d '{"event_type":"regenerate-handbook"}'
```

This will send a repository dispatch event that triggers the "Regenerate Handbook" workflow in the handbook repository.
